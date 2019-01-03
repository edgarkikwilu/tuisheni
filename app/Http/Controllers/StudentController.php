<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use App\Subject;
use App\User;
use App\Follow;
use App\Report;
use App\ExamType;
use App\Payment;
use App\QuizAnswer;
use App\Log;
use App\Exam;
use App\Tutorial;
use App\Quiz;
use App\Message;

use DB;
use Auth;
use Carbon\Carbon;

class StudentController extends Controller
{
    public function studentdash(){
        $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();
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

        return view('student/index')->withMessages($messages)->withAverage($this->getAverageScore())->withContents($contentArray);
    }
    public function getAverageScore(){
        $subjects = Subject::all();
        $avgs = collect([]);
        $totalAvgs = collect([]);
        foreach ($subjects as $subject) {
            $scores = Report::select('score')
                    ->whereHas('exam', function($query) use ($subject){
                        $query->where('subject_id', $subject->id);
                    })
                    ->where('user_id', Auth::user()->id)
                    ->whereMonth('created_at', date('m'))
                    ->get();
            if ($scores->isEmpty()) {
                $report = new Report();
                $report->score = 0;
                $scores->push($report);
            }
            $sum = 0;
           $avg = 0;
           $count = 0;
           foreach($scores as $score){
               $sum += $score->score;
               $count++;
               if($scores->count() == $count){
                   $avg = $sum/$scores->count();
                   $avgs->push(round($avg));
                   //dd($avgs);
                   break;
               }
           }
        }

        return $avgs->avg();
    }
    public function profile(){
        $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();
        $followers = Follow::where('follow_id',Auth::user()->id)->count();
        $following = Follow::where('user_id',Auth::user()->id)->count();
        return view('student/profile')->withMessages($messages)->withFollowers($followers)->withFollowing($following);
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
        return view('student/profile')->withMessages($messages)->withFollowers($followers)->withFollowing($following);
    }
    public function students(){
        $students = User::where('type','student')->orderBy('id','desc')->get();
        $messages = collect([]);
        if (Auth::user() != null) {
            $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();
        }
        $subjects = Subject::all();
        //$followers = Follow::where('follow_id',$id)->count();
        return view('/students')->withStudents($students)->withSubjects($subjects)->withMessages($messages);
    }
    public function filterStudents(Request $request){
        $user = new User();
        $students = $user->newQuery();


        if ($request->has('username') && $request->username != "") {
            $students->where('username', 'like' ,'%'.$request->username.'%');
        }

        if ($request->has('form') && $request->form != "") {
            $students->where('form',$request->form);
        }

        if ($request->has('school') && $request->school != "") {
            $students->where('school', 'like' ,'%'.$request->school.'%');
        }
        $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();
        return view('students')->withstudents($students->get())->withMessages($messages);
    }
    public function notes(){
        $notes = Note::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();
        $later = Note::whereLikedBy(Auth::user()->id)->with('likesCounter')->get();
        // dd($later);
        $subjects = Subject::all();
        return view('student/notes')->withNotes($notes)->withSubjects($subjects)->withLater($later)->withMessages($messages);
    }
    public function examinations(){
        $reports = Report::with('exam')->where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();
        $subjects = Subject::all();
        $types = ExamType::all();
        return view('student/examinations')->withReports($reports)->withSubjects($subjects)->withTypes($types)->withMessages($messages);
    }
    public function filterExams(Request $request){
        $reports = new Report();
        $reports = $reports->newQuery();

        $subjects = Subject::all();
        $types = ExamType::all();

        if ($request->has('subject') && $request->subject != "") {
            $reports->whereHas('exam', function($query) use ($request){
                $query->where('subject_id',$request->subject);
            });
        }

        if ($request->has('form') && $request->form != "") {
            $reports->whereHas('exam', function($query) use ($request){
                $query->where('form',$request->form);
            });
        }

        if ($request->has('type') && $request->type != "") {
            $reports->whereHas('exam', function($query) use ($request){
                $query->where('exam_type_id',$request->type);
            });
        }
        $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();

        $reports->where('user_id', Auth::user()->id)->orderBy('id','desc');

        return view('student.examinations')->withreports($reports->get())->withSubjects($subjects)->withTypes($types)->withMessages($messages);
    }

    public function results(){
        $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();
        return view('student/results')->withMessages($messages);
    }
    public function assesment(){
        $month = Carbon::now()->englishMonth;
        $subjects = Subject::all();
        $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();
        $reports = collect([]);
        $avgs = collect([]);
        $totalAvgs = collect([]);
        foreach ($subjects as $subject) {
            $scores = Report::select('score')
                    ->whereHas('exam', function($query) use ($subject){
                        $query->where('subject_id', $subject->id);
                    })
                    ->where('user_id', Auth::user()->id)
                    ->whereMonth('created_at', date('m'))
                    ->get();
            if ($scores->isEmpty()) {
                $report = new Report();
                $report->score = 0;
                $scores->push($report);
            }
            $sum = 0;
           $avg = 0;
           $count = 0;
           foreach($scores as $score){
               $sum += $score->score;
               $count++;
               if($scores->count() == $count){
                   $avg = $sum/$scores->count();
                   $avgs->push(round($avg));
                   //dd($avgs);
                   break;
               }
           }
            // $scores->push($subject->name);
            $reports->push($scores);
        }
        
        // dd($reports);
        return view ('student/assesment')->withReports($reports)->withSubjects($subjects)->withAverages($avgs)->withMessages($messages)->withMonth($month);
    }
    public function filterAssessment(Request $request){
        $subjects = Subject::all();
        $month = date("F", mktime(0, 0, 0, $request->month, 10));
        $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();
        $reports = collect([]);
        $avgs = collect([]);
        $totalAvgs = collect([]);
        foreach ($subjects as $subject) {
            $scores = Report::select('score')
                ->whereHas('exam', function($query) use ($subject){
                    $query->where('subject_id', $subject->id);
                })
                ->where('user_id', Auth::user()->id)
                ->whereMonth('created_at', $request->month)
                ->get();
            if ($scores->isEmpty()) {
                $report = new Report();
                $report->score = 0;
                $scores->push($report);
            }
            $sum = 0;
           $avg = 0;
           $count = 0;
           foreach($scores as $score){
               $sum += $score->score;
               $count++;
               if($scores->count() == $count){
                   $avg = $sum/$scores->count();
                   $avgs->push(round($avg));
                   //dd($avgs);
                   break;
               }
           }
            // $scores->push($subject->name);
            $reports->push($scores);
        }
        
        // dd($reports);
        return view ('student/assesment')->withReports($reports)->withSubjects($subjects)->withAverages($avgs)->withMessages($messages)->withMonth($month);
    }
    public function payments(){
        $month = 0;
        $payments = Payment::where('user_id',Auth::user()->id);
        $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();
        return view('student/payments')->withpayments($payments)->withMessages($messages)->withMonth($month);
    }

    public function filterPayments(Request $request){
        $month = date("F", mktime(0, 0, 0, $request->month, 10));
        $payments = new Payment();
        $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();
        $payments = $payments->newQuery();

        if ($request->has('month') && $request->month != "") {
            $payments->whereMonth('created_at',$request->month);
        }

        if ($request->has('action') && $request->action != "") {
            $payments->where('action',$request->action);
        }

        $payments->where('user_id', Auth::user()->id)->orderBy('id','desc');

        return view('student.payments')->withpayments($payments->get())->withMessages($messages)->withMonth($month);
    }

    public function createnotes(){
        $subjects = Subject::with('topics')->get();
        $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();
        return view('student/createnotes')->withSubjects($subjects)->withMessages($messages);
    }

    public function getTopics($id){
        $topics = DB::table("topics")->where("subject_id",$id)->pluck("name","id");
        return json_encode($topics);
    }

    public function getSubTopics($id){
        $subtopics = DB::table("subtopics")->where("topic_id",$id)->pluck("name","id");
        return json_encode($subtopics);
    }

    public function followStudent($id){
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

    public function quiz(){
        
    }
    public function checkQuizAnswers(Request $request){
        //dd($request);
        $isAnswerResponse = true;
        $isCorrect = false;
        $yourAnswers = collect([]);
        $correctAnswers = collect([]);

        foreach ($request->answer as $answer) {
            $questionAnswer = new QuizAnswer();
            $questionAnswer->user_id = Auth::user()->id;
            $questionAnswer->quiz_question_id = $answer['qn'];
            $questionAnswer->answer = $answer['ans'];
            $yourAnswers->push($answer['ans']);
            $correctAnswers->push($answer['cans']);
            $answer['ans'] == $answer['cans']?$questionAnswer->correct = true:$questionAnswer->correct = false;
            $questionAnswer->save();
        }

        if ($this->isLogPresent($id)) {
        $points = DB::table('variables')->select('int_value')->where('name','quiz_attempt_points')->first();
            Auth::user()->increment('points',$points->int_value);
            $log = new Log();
            $log->user_id = Auth::user()->id;
            $log->ip = "";
            $log->location = "Tanzania";
            $log->type = "Quiz";
            $log->description = "Quiz Attempt".$id;
            $log->points = $points->int_value;
            $log->save();

            $teacher_id = Quiz::findOrFail($id)->user_id;
            $teacher_points_log = new Log();
            $teacher_points_log->user_id = $teacher_id;
            $teacher_points_log->ip = "";
            $teacher_points_log->location = "Tanzania";
            $teacher_points_log->type = "Quiz";
            $teacher_points_log->description = "Quiz Attempt Points";
            $teacher_points_log->points = $points->int_value;
            $teacher_points_log->save();

        }

        // dd($correctAnswers);
        $quiz = Quiz::with('questions')->with('user')->where('id',$request->quiz_id)->first();
        return view('quiz/singlequiz')->withQuiz($quiz)->withIsAnswerResponse($isAnswerResponse)->withYourAnswers($yourAnswers)->withCorrectAnswers($correctAnswers)->withIsCorrect($isCorrect);
    }

    public function isLogPresent($id){
        if (Auth::user()) {
            $log = Log::where('user_id',Auth::user()->id)->where('description', 'Quiz Attempt'.$id)->count();
            return $log>0?false:true;
        } else {
            return false;
        }        
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
        return $sum;
    }
    
    public function getYearPointsSumCollection(){
        $logs = Log::get(['points','created_at'])->groupBy(function($date){
            return Carbon::parse($date->created_at)->format('m');
        });
        
        for ($i=1; $i <= 12; $i++) { 
            if (!isset($logs[$i])) {
                $logs[$i] = collect([]);
            }
        }
        
        $sum = $logs->sortKeys()->map(function($row){
            return $row->sum('points');
        });
        
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

        return $reports->sortKeys()->values();
    }
    public function getMonthlyStudentExamPerfomanceCollection(){
        $reports = DB::table('reports')->get(['score','created_at'])->groupBy(function($date){
            return Carbon::parse($date->created_at)->format('m');
        });
        //dd($reports->toArray());
        $avg = $reports->map(function($row){
            return $row->avg('score');
        });
        for ($i=1; $i <= 12; $i++) { 
            if (!isset($avg[$i])) {
                $avg[$i] = 0;
            }
        }
        //dd($avg->sortKeys()->values()->toArray());
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
        // dd($contentArray);
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
}
