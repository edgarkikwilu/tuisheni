<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Quiz;
use App\Subject;
use App\Follow;
use App\Exam;
use App\Note;
use App\Answer;
use App\ExamType;
use App\Attachement;
use App\Payment;
use App\ExamAttachment;
use App\Report;
use App\Point;
use App\Topic;
use App\QuizQuestion;
use App\Choice;
use App\Log;
use App\MarkingScheme;

use Auth;
use Session;
use DB;
use Carbon\Carbon;

class TeacherController extends Controller
{
    public function teacherdash(){
        return view('teacher/teacherdash');
    }
    public function teachers(){
        $teachers = User::where('type','teacher')->orderBy('id','desc')->get();
        $subjects = Subject::all();
        //$followers = Follow::where('follow_id',$id)->count();
        return view('teachers')->withTeachers($teachers)->withSubjects($subjects);
    }

    public function filterTeachers(Request $request){
        $user = new User();
        $teachers = $user->newQuery();
        $subjects = Subject::all();

        if ($request->has('username') && $request->username != "") {
            $teachers->where('username', 'like' ,'%'.$request->username.'%');
        }

        if ($request->has('form') && $request->form != "") {
            $teachers->where('form',$request->form);
        }

        if ($request->has('school') && $request->school != "") {
            $teachers->where('school', 'like' ,'%'.$request->school.'%');
        }
        return view('teachers')->withteachers($teachers->get())->withSubjects($subjects);
    }
    public function followTeacher($id){
        if (Auth::check()) {
            $follow = new Follow();
            $follow->user_id = Auth()->id;
            $follow->follow_id = $id;
            $follow->save();
            // Session::flash('success','followed!');
            return response()->json(['success'=>'followed']);
        } else {
            // Session::flash('success','please login first!');
            return response()->json(['success'=>'please login first']);
        }
    }
    public function messageTeacher(Request $request){

    }


    public function notes(){
        $subjects = Subject::all();
        $notes = Note::where('user_id', Auth::user()->id)->with('topic')->with('subtopic')->get();
        return view('teacher/notes')->withSubjects($subjects)->withNotes($notes);
    }
    public function filterNotes(Request $request){
        $notes = new Note();
        $notes = $notes->newQuery();

        $subjects = Subject::all();

        if ($request->has('subject') && $request->subject != "") {
            $notes->whereHas('topic', function($query) use ($request){
                $query->where('subject_id',$request->subject);
            });
        }

        if ($request->has('form') && $request->form != "") {
            // dd($request->has('form'));
            $notes->where('form',$request->form)->where('user_id',Auth::user()->id);
        }

        if ($request->has('title') && $request->title != "") {
            $notes->where('title','like','%'.$request->title.'%')->where('user_id',Auth::user()->id);
        }

        return view('teacher.notes')->withNotes($notes->get())->withSubjects($subjects);
    }
    public function createNotes(){
        $subjects = Subject::with('topics')->get();
        return view('teacher/createnotes')->withSubjects($subjects);
    }
    public function storeNotes(Request $request){
        
        $request->validate([
            'form'=>'bail|required|integer|max:6',
            'subject'=>'required|integer|max:100',
            'topic'=>'required|integer|max:10000',
            'subtopic'=>'integer|max:100000',
            'title'=>'string|max:100',
            'article'=>'required|string'
        ]);

        $notes = new Note();
        $notes->user_id = Auth::user()->id;
        $notes->form = $request->form;
        $notes->topic_id = $request->topic;
        $notes->subtopic_id = $request->subtopic;
        $notes->week = date('W');
        $notes->title = $request->title;
        $notes->article = $request->article;
        $notes->original = false;

        if ($notes->save()) {
            if ($request->hasFile('attachments')) {
                $i = 0;
                foreach ($request->file('attachments') as $attachment) {
                    $i = $i + 1;
                    if($i < 7){
                    $filename = time().$attachment->getClientOriginalName();
                    $attachment->storeAs('attachments',$filename);
    
                    $attachment = new Attachement();
                    $attachment->note_id  = $notes->id;
                    $attachment->filename = $filename;
                    $attachment->save();
                    }
                }
            }
            $points = DB::table('variables')->select('int_value')->where('name','notes_post_points')->first();
            Auth::user()->increment('points',$points->int_value);
            $log = new Log();
            $log->user_id = Auth::user()->id;
            $log->ip = "";
            $log->location = "Tanzania";
            $log->description = "Post Exam";
            $log->location = "Tanzania";
            $log->points = $points->int_value;
            $log->save();
        }else{
            return redirect()->back()->withInput();    
        }
        return redirect()->back();
    }
    public function single_exam($id){
        $exam = Exam::with('attachements')->findOrFail($id);
        $answers = Answer::with('answerSheets')->with('user')->where('exam_id',$id)->get();

        $reports = Report::where('exam_id', $id)->get();

        return view('teacher/single_exam')->withExam($exam)->withAnswers($answers)->withReports($reports);
    }
    public function giveMarks(Request $request){
        
        if ($request->ajax() && !$this->checkIfReportExists($request->user_id,$request->exam_id)) {
            $request->validate([
                'score'=>'bail|required|string|max:100|min:0',
                'remarks'=>'string|max:255'
            ]);
            $report = new Report();
            $report->user_id = $request->user_id;
            $report->exam_id = $request->exam_id;
            $report->score = $request->score;
            $report->remarks = $request->remarks;
            $report->teacher_id = Auth::user()->id;
            $report->week = date('W');
    
            if ($report->score > 80) {
                $report->grade = 'A';
            } else if ($report->score <= 80 && $report->score >= 71) {
                $report->grade = 'B';
            }else if ($report->score <= 70 && $report->score >= 56) {
                $report->grade = 'C';
            }
            else if ($report->score <= 55 && $report->score >= 45) {
                $report->grade = 'D';
            }
            else {
                $report->grade = 'F';
            }
    
            if ($report->save()) {
                $answer = Answer::find($request->answer_id);
                $answer->score = $request->score;
                $answer->save();
            }

            return response()->json(['status'=>'success','score'=>$request->score]);
        }else{
            return response()->json(['status'=>'Report Already Exists']);
        }
        // $exam = Exam::with('attachements')->findOrFail($request->exam_id);
        // $answers = Answer::with('answerSheets')->with('user')->where('exam_id',$request->exam_id)->get();

        // return view('teacher/single_exam')->withExam($exam)->withAnswers($answers);
        return redirect()->back();
    }

    public function checkIfReportExists($user_id, $exam_id){
        $reports = Report::where('user_id',$user_id)->where('exam_id',$exam_id)->get();
        return $reports->count() > 0?true:false;
    }
    
    public function points(){
        $points = Point::with('user')->with('from')->where('user_id',Auth::user()->id)->get();
        return view('teacher/points')->withPoints($points);
    }
    public function deleteNotes(Request $request){
        $notes = Note::findOrFail($request->id);
        $notes->delete();
        $subjects = Subject::all();
        return view('teacher/notes')->withSubjects($subjects);
    }

    public function examinations(){
        $subjects = Subject::all();
        $exams = Exam::where('user_id',Auth::user()->id)->get();
        return view('teacher/examinations')->withSubjects($subjects)->withExams($exams);
    }
   
    public function assesment(){
        return view('teacher/assesment');
    }
    public function payments(){
        $payments = Payment::with('user')->where('user_id', Auth::user()->id)->get();
        return view('teacher/payments')->withPayments($payments);
    }
    
    public function filterPayments(Request $request){

        $payments = new payment();
        $payments = $payments->newQuery();

        if ($request->has('month') && $request->month != "") {
            $payments->whereMonth('created_at',$request->month)->where('user_id', Auth::user()->id);
        }

        return view('teacher.payments')->withpayments($payments->get());

    }

    public function createexam(){
        $subjects = Subject::all();
        $types = ExamType::all();
        return view('teacher/createexam')->withSubjects($subjects)->withTypes($types);
    }

    public function filterExams(Request $request){
        $exams = new Exam();
        $exams = $exams->newQuery();

        $subjects = Subject::all();

        if ($request->has('subject') && $request->subject != "") {
            $exams->where('subject_id', $request->subject)->where('user_id',Auth::user()->id);
        }

        if ($request->has('form') && $request->form != "") {
            $exams->where('form',$request->form)->where('user_id',Auth::user()->id);
        }

        if ($request->has('title') && $request->title != "") {
            $exams->where('title','like','%'.$request->title.'%')->where('user_id',Auth::user()->id);
        }

        return view('teacher.examinations')->withExams($exams->get())->withSubjects($subjects);
    }

    public function storeExam(Request $request){
        //dd('before validation');
        // dd($request->hasFile('marking_scheme'));
        $request->validate([
            'form'=>'bail|required|integer|max:6',
            'subject'=>'required|integer|max:100',
            'type'=>'required|integer|max:10000',
            'title'=>'string|max:100',
            'start'=>'string|max:30',
            'end'=>'string|max:30',
            'description'=>'required|string',
        ]);

        $start = Carbon::create($request->syear, $request->smonth, $request->sday,
        $request->shour, $request->sminute, 00);
        $end = Carbon::create($request->eyear, $request->emonth, $request->eday,
        $request->ehour, $request->eminute, 00);
            
        $exam = new Exam();
        $exam->user_id = Auth::user()->id;
        $exam->form = $request->form;
        $exam->subject_id = $request->subject;
        $exam->week = date('W');
        $exam->start = $start;
        $exam->end = $end;
        $exam->title = $request->title;
        $exam->description = $request->description;
        $exam->exam_type_id = $request->type;
        $exam->original = false;

        if ($exam->save()) {
            if ($request->hasFile('attachments')) {
                $i = 0;
                foreach ($request->file('attachments') as $attachment) {
                    $i = $i + 1;
                    if($i < 7){
                    $filename = time().$attachment->getClientOriginalName();
                    $attachment->storeAs('exam_attachments',$filename);
    
                    $attachment = new ExamAttachment();
                    $attachment->exam_id  = $exam->id;
                    $attachment->filename = $filename;
                    $attachment->save();
                    }
                }
            }
            if ($request->hasFile('marking_scheme')) {
                // dd('MarkingScheme');
                $i = 0;
                foreach ($request->file('marking_scheme') as $attachment) {
                    $i = $i + 1;
                    if($i < 7){
                    $filename = time().$attachment->getClientOriginalName();
                    $attachment->storeAs('marking_scheme',$filename);
    
                    $markingScheme = new MarkingScheme();
                    $markingScheme->user_id  = Auth::user()->id;
                    $markingScheme->exam_id  = $exam->id;
                    $markingScheme->filename = $filename;
                    $markingScheme->save();
                    }
                }
            }
            $points = DB::table('variables')->select('int_value')->where('name','exam_post_points')->first();
            Auth::user()->increment('points',$points->int_value);
            $log = new Log();
            $log->user_id = Auth::user()->id;
            $log->ip = "";
            $log->location = "Tanzania";
            $log->description = "Post Exam";
            $log->location = "Tanzania";
            $log->points = $points->int_value;
            $log->save();
        }else{
            return redirect()->back()->withInput();    
        }
        return redirect()->back();
    }

    public function deleteExam(Request $request){
        $exam = Exam::findOrFail($request->id);
        $exam->delete();
        $subjects = Subject::all();
        $types = ExamType::all();
        return view('teacher/examination')->withSubjects($subjects)->withTypes($types);
    }

    public function getAllResults(){
        $ids = Report::select('user_id')->whereMonth('created_at',date('m'))->distinct()->pluck('user_id')->where('teacher_id', Auth::user()->id);
       //$results = DB::table('reports')->select('user_id','week','score')->whereMonth('created_at',date('m'))->groupBy('user_id')->get();0
       $subjects = Subject::all();
       $results = collect([]);
       $avgs = collect([]);
       $users = collect([]);
       foreach($ids as $id){
           $user = User::select('firstname','lastname')->where('id',$id)->get();
           $users->push($user);
           //dd($users[0]);
           $scores = Report::select('user_id','score')->where('user_id',$id)->whereMonth('created_at',date('m'))->distinct()->get();
           $sum = 0;
           $avg = 0;
           $count = 0;
           foreach($scores as $score){
               $sum += $score->score;
               $count++;
               if($scores->count() == $count){
                   $avg = $sum/4;
                   $avgs->push($avg);
                   //dd($avgs);
                   break;
               }
           }
           $results->push($scores);
       }
       return view('teacher/results')->withResults($results)->withSubjects($subjects)->withAverages($avgs)->withUsers($users);
   }

   public function filterResults(Request $request){

    $reports = new Report();
    $reports = $reports->newQuery();

    $subjects = Subject::all();

    if ($request->has('subject') && $request->subject != "") {
        $reports->whereHas('exam', function($query) use ($request){
            $query->where('subject_id',$request->subject)->where('user_id', Auth::user()->id);
        });
    }

    if ($request->has('form') && $request->form != "") {
        // dd($request->has('form'));
        $reports->whereHas('exam', function($query) use ($request){
            $query->where('form',$request->form)->where('user_id', Auth::user()->id);
        });
    }

    if ($request->has('title') && $request->title != "") {
        $reports->whereHas('exam', function($query) use ($request){
            $query->where('title',$request->title)->where('user_id', Auth::user()->id);
        });
    }

    if ($request->has('username') && $request->username != "") {
        $reports->whereHas('user', function($query) use ($request){
            $query->where('username',$request->username);
        });
    }

    if ($request->has('school') && $request->school != "") {
        $reports->whereHas('user', function($query) use ($request){
            $query->where('school',$request->school)->where('user_id', Auth::user()->id);
        });
    }

    if ($request->has('month') && $request->month != "") {
        $query->whereMonth('created_at',$request->month)->where('teacher_id', Auth::user()->id);
    }

    $reports = $reports->get();

   $subjects = Subject::all();
   $results = collect([]);
   $avgs = collect([]);
   $users = collect([]);
   foreach($reports as $report){
       $user = User::select('firstname','lastname')->where('id',$report->user_id)->get();
       $users->push($user);
       //dd($users[0]);
       $scores = Report::select('user_id','score')->where('user_id',$report->user_id)->distinct()->get();
       $sum = 0;
       $avg = 0;
       $count = 0;
       foreach($scores as $score){
           $sum += $score->score;
           $count++;
           if($scores->count() == $count){
               $avg = $sum/4;
               $avgs->push($avg);
               //dd($avgs);
               break;
           }
       }
       $results->push($scores);
   }
   return view('teacher/results')->withResults($results)->withSubjects($subjects)->withAverages($avgs)->withUsers($users);
}

    public function quiz(){
        $subjects = Subject::all();
        $quizzes = Quiz::all(); 
        return view('teacher/quiz')->withSubjects($subjects)->withQuizzes($quizzes);
    }
    public function createquiz (){
        $subjects = Subject::all();
        $topics = Topic::all();
        return view ('teacher/createquiz')->withSubjects($subjects)->withTopics($topics);
    }

    public function storeQuiz(Request $request){
        //dd($request);
        //dd(count($request->questions)/6);
        $quiz = new Quiz();
        $quiz->user_id = Auth::user()->id;
        $quiz->title = $request->title;
        $quiz->form = $request->form;
        $quiz->subject_id = $request->subject;
        $quiz->topic_id = $request->topic;
        $quiz->subtopic_id = $request->subtopic;

        if ($quiz->save()) {
            $count = count($request->questions)/6;
            $position = 0;
            for ($is=0; $is < $count; $is++) { 
                $question = new QuizQuestion();
                $question->quiz_id = $quiz->id;
                $question->question = $request->questions[$position];
                $question->answer = $request->questions[$position+5];
                $question->question_type_id = 1;

                if ($question->save()) {
                    //$choiceCount= 0;
                    for ($i=1; $i < 5; $i++) { 
                        $choice = new Choice();
                        $choice->quiz_question_id = $question->id;
                        switch ($i) {
                            case 1:
                                $choice->index = "A";
                                break;
                            case 2:
                                $choice->index = "B";
                            break;
                            case 3:
                                $choice->index = "C";
                            break;
                            case 4:
                                $choice->index = "D";
                            break;
                        }
                        $choice->name = $request->questions[$position+$i];
                        $choice->save();
                    }
                }
                $position += 6;
            }
            $points = DB::table('variables')->select('int_value')->where('name','quiz_post_points')->first();
            Auth::user()->increment('points',$points->int_value);
            $log = new Log();
            $log->user_id = Auth::user()->id;
            $log->ip = "";
            $log->location = "Tanzania";
            $log->description = "Post Quiz";
            $log->location = "Tanzania";
            $log->points = $points->int_value;
            $log->save();
            return redirect()->back();    
        } else {
            return redirect()->back()->withInputs();
        }
        
        
    }


}
