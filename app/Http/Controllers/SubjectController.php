<?php

namespace App\Http\Controllers;

use App\Subject;
use App\Report;
use App\Note;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function __construct(){
        $this->middleware('guest:web');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    //subject to class
    public function class($subject, $class){
        $week = 1;
        $topStudents = Report::where('week',$week)->orderBy('score','desc')->take(3)->get();
        $votednotes = Note::where('week', $week)->orderBy('votes','desc')->take(3)->get();
        return view('class')->withSubject($subject)->withClass($class)->withTopStudents($topStudents)
                ->withVotedNotes($votednotes);
    }
    public function assessment($id){
        return view('assesment');
    }

    /*
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        //
    }
}
