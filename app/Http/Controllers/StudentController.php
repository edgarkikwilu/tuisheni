<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use App\Subject;

class StudentController extends Controller
{
    public function studentdash(){
        return view('student/studentdash');
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
        return view('student/createnotes');
    }
}
