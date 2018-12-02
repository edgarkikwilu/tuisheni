<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use App\Subject;
use App\User;
use App\Follow;

use DB;

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
        $notes = Note::where('user_id',9)->orderBy('id','desc')->get();
        $subjects = Subject::all();
        return view('student/notes')->withNotes($notes)->withSubjects($subjects);
    }
    public function examinations(){
        return view('student/examinations');
    }
    public function results(){
        return view('student/results');
    }
    public function assesment(){
        return view ('student/assesment');
    }
    public function payments(){
        return view('student/payments');
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
}
