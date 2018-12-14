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
use App\Quiz;

use DB;
use Auth;

class StudentController extends Controller
{
    public function studentdash(){
        return view('student/studentdash');
    }
    public function students(){
        $students = User::where('type','student')->orderBy('id','desc')->get();
        //$followers = Follow::where('follow_id',$id)->count();
        return view('/students')->withStudents($students);
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
        return view('students')->withstudents($students->get());
    }
    public function notes(){
        $notes = Note::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        $subjects = Subject::all();
        return view('student/notes')->withNotes($notes)->withSubjects($subjects);
    }
    public function examinations(){
        $reports = Report::with('exam')->where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        $subjects = Subject::all();
        $types = ExamType::all();
        return view('student/examinations')->withReports($reports)->withSubjects($subjects)->withTypes($types);
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

        $reports->where('user_id', Auth::user()->id)->orderBy('id','desc');

        return view('student.examinations')->withreports($reports->get())->withSubjects($subjects)->withTypes($types);
    }

    public function results(){
        return view('student/results');
    }
    public function assesment(){
        $subjects = Subject::all();
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
                   $avg = $sum/4;
                   $avgs->push($avg);
                   //dd($avgs);
                   break;
               }
           }
            // $scores->push($subject->name);
            $reports->push($scores);
        }
        
        // dd($reports);
        return view ('student/assesment')->withReports($reports)->withSubjects($subjects)->withAverages($avgs);
    }
    public function payments(){
        $payments = Payment::where('user_id',Auth::user()->id);
        return view('student/payments')->withpayments($payments);
    }

    public function filterPayments(Request $request){
        $payments = new Payment();
        $payments = $payments->newQuery();

        if ($request->has('month') && $request->month != "") {
            $payments->whereMonth('created_at',$request->month);
        }

        if ($request->has('action') && $request->action != "") {
            $payments->where('action',$request->action);
        }

        $payments->where('user_id', Auth::user()->id)->orderBy('id','desc');

        return view('student.payments')->withpayments($payments->get());
    }

    public function createnotes(){
        $subjects = Subject::with('topics')->get();
        return view('student/createnotes')->withSubjects($subjects);
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

        $points = DB::table('variables')->select('int_value')->where('name','quiz_attempt_points')->first();
            Auth::user()->increment('points',$points->int_value);
            $log = new Log();
            $log->user_id = Auth::user()->id;
            $log->ip = "";
            $log->location = "Tanzania";
            $log->description = "Post Exam";
            $log->location = "Tanzania";
            $log->points = $points->int_value;
            $log->save();

        // dd($correctAnswers);
        $quiz = Quiz::with('questions')->with('user')->where('id',$request->quiz_id)->first();
        return view('quiz/singlequiz')->withQuiz($quiz)->withIsAnswerResponse($isAnswerResponse)->withYourAnswers($yourAnswers)->withCorrectAnswers($correctAnswers)->withIsCorrect($isCorrect);
    }
}
