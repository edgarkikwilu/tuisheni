<?php

namespace App\Http\Controllers;

use App\Quiz;
use App\Subject;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quizzes = Quiz::all();
        $subjects = Subject::all();

        return view('quiz')->withSubjects($subjects)->withQuizzes($quizzes);
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

        return view('quiz')->withquizzes($quizzes->get())->withSubjects($subjects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function singlequiz (){
        return view ('singlequiz');
    }
}
