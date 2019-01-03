<?php

namespace App\Http\Controllers;

use App\Quiz;
use App\Subject;
use App\Log;
use Illuminate\Http\Request;

use Auth;
use DB;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quizzes = Quiz::paginate(10);
        $subjects = Subject::all();

        $stats = collect([]);

        foreach ($quizzes as $quiz) {
            $questions = $quiz->questions;
            $answers = collect([]);
            foreach ($questions as $question) {
                //dd($question->answers->count());
                foreach ($question->answers as $answer) {
                    if ($answer->correct == true) {
                        $answers->push(1);
                    }
                }
            }
            $stats->push($answers);
        }
       // dd($stats);    
       $messages = collect([]);
        if (Auth::user() != null) {
            $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();
        }

        return view('quiz/quiz')->withSubjects($subjects)->withQuizzes($quizzes)->withStats($stats)->withMessages($messages);
    }

    public function getSingleQuiz(){
        return view('quiz/singlequiz');
    }

    public function filter(Request $request){
        $quizzes = new Quiz();
        $quizzes = $quizzes->newQuery();
        $subjects = Subject::all();

        if ($request->has('subject') && $request->subject != "") {
            $quizzes->where('subject_id', $request->subject);
        }

        if ($request->has('form') && $request->form != "") {
            $quizzes->whereHas('topic', function($query) use ($request){
                $query->where('form',$request->form);
            });
        }

        if ($request->has('title') && $request->title != "") {
            $quizzes->where('title','like', '%'.$request->title.'%');
        }

        if ($request->has('username') && $request->username != "") {
            $quizzes->whereHas('user', function($query) use ($request){
                $query->where('username','like', '%'.$request->username.'%');
            });
        }

        if ($request->has('school') && $request->school != "") {
            $quizzes->whereHas('user', function($query) use ($request){
                $query->where('school','like', '%'.$request->school.'%');
            });
        }

        $messages = collect([]);
        if (Auth::user() != null) {
            $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();
        }

        return view('quiz')->withquizzes($quizzes->get())->withSubjects($subjects)->withMessages($messages);
    }

    public function attempt($id)
    {
        $isAnswerResponse = false;
        $yourAnswers = collect([]);
        $correctAnswers = collect([]);
        $isCorrect = false;

        $subjects = Subject::all();

        $messages = collect([]);
        if (Auth::user() != null) {
            $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();
        }

        $quiz = Quiz::with('questions')->with('user')->where('id',$id)->first();
        $quiz->increment('views');
        return view('quiz/singlequiz')->withQuiz($quiz)->withIsAnswerResponse($isAnswerResponse)->withYourAnswers($yourAnswers)->withCorrectAnswers($correctAnswers)->withIsCorrect($isCorrect)->withMessages($messages)->withSubjects($subjects);
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            
    }

    public function filterQuizzes(Request $request){

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function show(Quiz $quiz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function edit(Quiz $quiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quiz $quiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quiz $quiz)
    {
        //
    }
    public function quiz(){
        return view('quiz/quiz');
    }
    public function singlequiz (){
        return view ('quiz/singlequiz');
    }
    

}
