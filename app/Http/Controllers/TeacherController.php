<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Quiz;
use App\Subject;
use App\Follow;

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
            Session::flash('success','followed!');
            return redirect()->back();
        } else {
            Session::flash('error','please login first!');
            return redirect()->back();
        }
    }
    public function messageTeacher(Request $request){

    }


    public function notes(){
        return view('teacher/notes');
    }
    public function examinations(){
        return view('teacher/examinations');
    }
    public function single_exam(){
        return view('teacher/single_exam');
    }
    public function quiz(){
        $subjects = Subject::all();
        $quizzes = Quiz::all(); 
        return view('teacher/quiz')->withSubjects($subjects)->withQuizzes($quizzes);
    }
    
    public function points(){
        return view('teacher/points');
    }
    public function payments(){
        return view('teacher/payments');
    }
    public function createnotes(){
        return view('teacher/createnotes');
    }
    public function createexam(){
        return view('teacher/createexam');
    }
}
