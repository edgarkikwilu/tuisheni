<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Quiz;
use App\Subject;
use App\Follow;
use App\Exam;
use App\Tutorial;
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
use App\Message;
use App\MarkingScheme;

use App\Charts\NotesChart;
use App\Charts\YearPointsChart;
use App\Charts\MonthlyPointsChart;
use App\Charts\WeeklyExamChart;
use App\Charts\MonthlyExamChart;

use Auth;
use Charts;
use Session;
use DB;
use Carbon\Carbon;

class TeacherController extends Controller
{
    public function teacherdash(){
        $notes = Note::where('user_id',Auth::user()->id)->count();
        $exams = Exam::where('user_id',Auth::user()->id)->count();
        $quizzes = Quiz::where('user_id',Auth::user()->id)->count();
        $tutorials = Tutorial::where('user_id',Auth::user()->id)->count();

        $counts = collect([
            $notes, $exams, $quizzes, $tutorials
        ]);
        
        $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();
        $teacher = User::with('exams')->with('notes')->with('quizzes')->where('id',Auth::user()->id)->first();
        $followers = Follow::where('follow_id',Auth::user()->id)->count();
        $following = Follow::where('user_id',Auth::user()->id)->count();

        return view('teacher/dashboard')->withTeacher($teacher)->withFollowers($followers)->withFollowing($following)->withCounts($counts)->withMessages($messages);
    }
    public function getPointsSumCollection(){
        $logs = Log::select('points','week')->where('user_id',Auth::user()->id)->whereMonth('created_at',date('m'))->get();
        $sum = $logs->groupBy('week')->map(function($row){
            return $row->sum('points');
        });
        if ($sum->count() < 1) {
            $sum->push(0);
            $sum->push(0);
            $sum->push(0);
            $sum->push(0);
        }else if($sum->count() < 2){
            $sum->push(0);
            $sum->push(0);
            $sum->push(0);
        }else if($sum->count() < 3){
            $sum->push(0);
            $sum->push(0);
        }else if($sum->count() < 4){
            $sum->push(0);
        }
        //dd($sum);
        return $sum;
    }
    
    public function getYearPointsSumCollection(){
        // $logs = Log::select('points','created_at')->where('user_id',Auth::user()->id)->whereYear('created_at',date('y'))->get();
        $logs = Log::get(['points','created_at'])->where('teacher_id', Auth::user()->id)->groupBy(function($date){
            return Carbon::parse($date->created_at)->format('m');
        });
        
        for ($i=1; $i <= 12; $i++) { 
            if (!isset($logs[$i])) {
                $logs[$i] = collect([]);
            }
        }
        
        //dd($logs->sortKeys()->toArray());
        $sum = $logs->sortKeys()->map(function($row){
            return $row->sum('points');
        });
        
         //dd($sum->values());
        return $sum->values();
    }

    public function getWeeklyStudentsAveragePerformanceCollection(){
        $reports = Report::with('exam')->where('teacher_id', Auth::user()->id)->whereMonth('created_at',date('m'))->get();
        $reports = $reports->groupBy('week')->map(function($week){
            return $week->avg('score');
        });
        for ($i=1; $i <= 4; $i++) { 
            if (!isset($reports[$i])) {
                $reports[$i] = 0;
            }
        }
        //dd($reports->sortKeys()->values());
        return $reports->sortKeys()->values();
    }
    public function getMonthlyStudentExamPerfomanceCollection(){
        $reports = DB::table('reports')->where('teacher_id', Auth::user()->id)->get(['score','created_at'])->groupBy(function($date){
            return Carbon::parse($date->created_at)->format('m');
        });
        
        //dd($reports->sortKeys()->toArray());
        $avg = $reports->map(function($row){
            return $row->avg('score');
        });
        for ($i=1; $i <= 12; $i++) { 
            if (!isset($avg[$i])) {
                $avg[$i] = 0;
            }
        }
        //dd($avg->sortKeys());
        return $avg->sortKeys()->values();
    }
    public function getUploadedContents(){
        $notes = Note::where('user_id',Auth::user()->id)->count();
        $exams = Exam::where('user_id',Auth::user()->id)->count();
        $quizzes = Quiz::where('user_id',Auth::user()->id)->count();
        $tutorials = Tutorial::where('user_id',Auth::user()->id)->count();
        $contents = collect([]);
        $contents->push($notes);
        $contents->push($exams);
        $contents->push($quizzes);
        $contents->push($tutorials);

        $contentArray = $contents->toArray();
        return $contentArray;
    }
    public function getChartData(){
        $monthlyStudentPerformanceCollection = $this->getMonthlyStudentExamPerfomanceCollection();
        $weeklyStudentPerformanceCollection = $this->getWeeklyStudentsAveragePerformanceCollection();
        $yearPointsCollection = $this->getYearPointsSumCollection();
        $pointsCollection = $this->getPointsSumCollection();
        $contentCollection = $this->getUploadedContents();

        return response()->json(['weeklyPoints'=>$pointsCollection, 'monthlyPoints'=>$yearPointsCollection, 'weeklyPerfomance'=>$weeklyStudentPerformanceCollection, 'monthlyPerfomance'=>$monthlyStudentPerformanceCollection, 'contentCollection'=>$contentCollection]);
    }

    public function profile(){
        $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();
        $followers = Follow::where('follow_id',Auth::user()->id)->count();
        $following = Follow::where('user_id',Auth::user()->id)->count();
        return view('teacher/profile')->withMessages($messages)->withFollowers($followers)->withFollowing($following);
    }
    public function editProfile(Request $request){
        $user = User::findOrFail(Auth::user()->id);
        $user->username = $request->username;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->mobile = $request->mobile;
        $user->school = $request->school;
        $user->form = $request->form;
        $user->bio = $request->bio;
        $user->email = $request->email;
        $user->country = $request->country;
        $user->city = $request->city;
        $user->district = $request->district;
        $user->ward = $request->ward;

        $user->save();

        $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();
        $followers = Follow::where('follow_id',Auth::user()->id)->count();
        $following = Follow::where('user_id',Auth::user()->id)->count();
        return view('teacher/profile')->withMessages($messages)->withFollowers($followers)->withFollowing($following);
    }




    public function teachers(){
        $teachers = User::where('type','teacher')->orderBy('id','desc')->get();
        $messages = collect([]);

        if (Auth::user() != null) {
        $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();
        }
        
        $subjects = Subject::all();
        //$followers = Follow::where('follow_id',$id)->count();
        return view('teachers')->withTeachers($teachers)->withSubjects($subjects)->withMessages($messages);
    }

    public function filterTeachers(Request $request){
        $user = new User();
        $teachers = $user->newQuery();
        $subjects = Subject::all();
        $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();

        if ($request->has('username') && $request->username != "") {
            $teachers->where('username', 'like' ,'%'.$request->username.'%');
        }

        if ($request->has('form') && $request->form != "") {
            $teachers->where('form',$request->form);
        }

        if ($request->has('school') && $request->school != "") {
            $teachers->where('school', 'like' ,'%'.$request->school.'%');
        }
        return view('teachers')->withteachers($teachers->get())->withSubjects($subjects)->withMessages($messages);
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
        $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();
        $notes = Note::where('user_id', Auth::user()->id)->with('topic')->with('subtopic')->get();
        return view('teacher/notes')->withSubjects($subjects)->withNotes($notes)->withMessages($messages);
    }
    public function filterNotes(Request $request){
        $notes = new Note();
        $notes = $notes->newQuery();

        $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();

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

        return view('teacher.notes')->withNotes($notes->get())->withSubjects($subjects)->withMessages($messages);
    }
    public function createNotes(){
        $subjects = Subject::with('topics')->get();
        $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();
        return view('teacher/createnotes')->withSubjects($subjects)->withMessages($messages);
    }
   
    public function single_exam($id){
        $exam = Exam::with('attachements')->findOrFail($id);
        $answers = Answer::with('answerSheets')->with('user')->where('exam_id',$id)->get();
        $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();

        $reports = Report::where('exam_id', $id)->get();

        return view('teacher/single_exam')->withExam($exam)->withAnswers($answers)->withReports($reports)->withMessages($messages);
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
            $report->week = Carbon::now()->weekInMonth();
    
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
        $notesPoints = Point::with('user' )->where('user_id',Auth::user()->id)->where('type','Notes')->sum('value');
        $examsPoints = Point::with('user')->where('user_id',Auth::user()->id)->where('type','Exam')->sum('value');
        $quizPoints = Point::with('user')->where('user_id',Auth::user()->id)->where('type','Quiz')->sum('value');
        $tutorialPoints = Point::with('user')->where('user_id',Auth::user()->id)->where('type','Tutorial')->sum('value');
        $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();

        $pointsCount = collect([]);
        $pointsCount->push($notesPoints);
        $pointsCount->push($examsPoints);
        $pointsCount->push($quizPoints);
        $pointsCount->push($tutorialPoints);

        return view('teacher/points')->withPoints($points)->withPointsCount($pointsCount)->withMessages($messages);
    }
    

    public function examinations(){
        $subjects = Subject::all();
        $exams = Exam::where('user_id',Auth::user()->id)->get();
        $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();
        return view('teacher/examinations')->withSubjects($subjects)->withExams($exams)->withMessages($messages);
    }
   
    public function assesment(){
        $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();
        return view('teacher/assesment')->withMessages($messages);
    }
    public function payments(){
        $payments = Payment::with('user')->where('user_id', Auth::user()->id)->get();
        $totalPayments = $payments->sum('amount');
        $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();
        return view('teacher/payments')->withPayments($payments)->withTotalPayments($totalPayments)->withMonth(0)->withMessages($messages);
    }
    
    public function filterPayments(Request $request){

        $payments = new payment();
        $payments = $payments->newQuery();

        if ($request->has('month') && $request->month != "") {
            $payments->whereMonth('created_at',$request->month)->where('user_id', Auth::user()->id);
        }

        $totalPayments = Payment::with('user')->where('user_id', Auth::user()->id)->sum('amount');
        $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();

        return view('teacher.payments')->withpayments($payments->get())->withTotalPayments($totalPayments)->withMonth($request->month)->withMessages($messages);

    }

    public function createexam(){
        $subjects = Subject::all();
        $types = ExamType::all();
        $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();
        return view('teacher/createexam')->withSubjects($subjects)->withTypes($types)->withMessages($messages);
    }

    public function filterExams(Request $request){
        $exams = new Exam();
        $exams = $exams->newQuery();

        $subjects = Subject::all();
        $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();

        if ($request->has('subject') && $request->subject != "") {
            $exams->where('subject_id', $request->subject)->where('user_id',Auth::user()->id);
        }

        if ($request->has('form') && $request->form != "") {
            $exams->where('form',$request->form)->where('user_id',Auth::user()->id);
        }

        if ($request->has('title') && $request->title != "") {
            $exams->where('title','like','%'.$request->title.'%')->where('user_id',Auth::user()->id);
        }

        return view('teacher.examinations')->withExams($exams->get())->withSubjects($subjects)->withMessages($messages);
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
        $exam->markingSchemes()->delete();
        $exam->answers()->delete();
        $exam->reports()->delete();
        $exam->topStudents()->delete();
        $exam->comments()->delete();
        $exam->attendances()->delete();
        $exam->attachements()->delete();
        $exam->delete();
        $subjects = Subject::all();
        $types = ExamType::all();
        $exams = Exam::where('user_id',Auth::user()->id)->get();
        $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();
        return view('teacher/examinations')->withExams($exams)->withSubjects($subjects)->withTypes($types)->withMessages($messages);
    }

    public function getAllResults(){
        $ids = Report::select('user_id')->whereMonth('created_at',date('m'))->distinct()->pluck('user_id')->where('teacher_id', Auth::user()->id);
       //$results = DB::table('reports')->select('user_id','week','score')->whereMonth('created_at',date('m'))->groupBy('user_id')->get();0
       $subjects = Subject::all();
       $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();
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
       return view('teacher/results')->withResults($results)->withSubjects($subjects)->withAverages($avgs)->withUsers($users)->withMessages($messages);
   }

   public function filterResults(Request $request){

    $reports = new Report();
    $reports = $reports->newQuery();

    $subjects = Subject::all();
    $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();

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
   return view('teacher/results')->withResults($results)->withSubjects($subjects)->withAverages($avgs)->withUsers($users)->withMessages($messages);
}

    public function quiz(){
        $subjects = Subject::all();
        $quizzes = Quiz::where('user_id', Auth::user()->id);
        $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get(); 
        return view('teacher/quiz')->withSubjects($subjects)->withQuizzes($quizzes)->withMessages($messages);
    }
    public function createquiz (){
        $subjects = Subject::all();
        $topics = Topic::all();
        $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();
        return view ('teacher/createquiz')->withSubjects($subjects)->withTopics($topics)->withMessages($messages);
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

    public function deleteQuiz(Request $request){
        $quiz = Quiz::findOrFail($request->id);
        $quiz->questions()->delete();
        $quiz->taggable()->delete();
    
        $quiz->delete();

        $subjects = Subject::all();
        $quizzes = Quiz::all();
        $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();
        
        return view('teacher/quiz')->withQuizzes($quizzes)->withSubjects($subjects)->withMessages($messages);
    }


}


// $monthPointChart = Charts::create('pie', 'highcharts')
        // ->title('Points Earned')
        // ->elementLabel('Points vs Weeks')
        // ->labels(['Week 1', 'Week 2', 'Week 3', 'Week 4'])
        // ->values($pointsCollection)
        // ->dimensions(1000,500)
        // ->responsive(true);

        // $yearPointChart = Charts::create('line', 'highcharts')
        // ->title('Graph of Points Earned This Year')
        // ->elementLabel('Points vs Months')
        // ->labels(['January', 'February', 'March','April', 'May', 'June', 'July', 'August'
        //     ,'September', 'October', 'November', 'December'])
        // ->values($yearPointsCollection)
        // ->dimensions(1000,500)
        // ->responsive(true);

        // $weeklyExamChart = Charts::create('line', 'highcharts')
        // ->title('Weekly Exam Perfomance')
        // ->elementLabel('Average Score vs Week Of The Month')
        // ->labels(['Week 1', 'Week 2', 'Week 3', 'Week 4'])
        // ->values($monthlyStudentPerformanceCollection->toArray())
        // ->dimensions(1000,500)
        // ->responsive(true);

        // $monthlyExamChart = Charts::create('line', 'highcharts')
        // ->title('Monthly Exam Perfomance')
        // ->elementLabel('Average Score vs Month Of The year')
        // ->labels(['January', 'February', 'March','April', 'May', 'June', 'July', 'August'
        //     ,'September', 'October', 'November', 'December'])
        // ->values([50,80,20,50,60,65,64,90,85,79,43,20])
        // ->dimensions(1000,500)
        // ->responsive(true);