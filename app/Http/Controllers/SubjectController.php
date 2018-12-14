<?php

namespace App\Http\Controllers;

use App\Subject;
use App\Report;
use App\Note;
use App\Topic;
use App\Attachment;
use App\Follow;
use App\Subtopic;
use Illuminate\Http\Request;
use Auth;
use Session;

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
        $topics = Topic::with('subTopics')->where('form',$class)->orderBy('priority','asc')->get();
        $firstTopic = $topics->first();
        
        if ($firstTopic != null) {
        $recommendedNotes = Note::where('topic_id',$firstTopic->id)->where('original', true)->get();
        $mostVotedNotes = Note::where('topic_id',$firstTopic->id)->orderBy('votes','desc')->where('original', false)->get();
        $topStudents = Report::where('week',$week)->orderBy('score','desc')->take(3)->get();
        $votednotes = Note::where('week', $week)->where('original', true)->orderBy('votes','desc')->take(3)->get();
        return view('class/class')->withSubject($subject)->withClass($class)->withTopStudents($topStudents)
                ->withTopics($topics->take(7))->withRecommendedNotes($recommendedNotes)->withMostVotedNotes($mostVotedNotes);
        }else{
            Session::flash('success','Form '.$class.' notes not found');
            return redirect()->back();
        }
    }

    public function single($id){
        $notes = Note::with('attachements')->where('id',$id)->first();
        //$note = Note::select('user_id')->where('id',$id)->get()->first();
        $notes->increment('views');
        $followers = Follow::where('follow_id',$notes->user_id)->count();
        $follower = false;
        $follower = $this->checkIfFollowedByUser($notes->user_id);
        return view('single')->withNotes($notes)->withFollowers($followers)->withFollower($follower);
    }

    public function checkIfFollowedByUser($id){
        if (Auth::user()) {
            $follows = Follow::where('follow_id',$id)->get();
        foreach ($follows as $follow) {
            if ($follow->user_id == Auth::user()->id) {
                return true;
            }
        }
        }
        return false;
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

    public function recomended_subject(){
        return view('recomended_subject');
    }
    public function sidebar_subject(){
        return view('sidebar_subject');
    }
    public function class_topic(){
        return view('class/class_topic');
    }
}
