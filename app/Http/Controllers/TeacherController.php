<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function teacherdash(){
        return view('teacher/teacherdash');
    }
    public function notes(){
        return view('teacher/notes');
    }
    public function examinations(){
        return view('teacher/examinations');
    }
    public function results(){
        return view('teacher/results');
    }
    public function assesment(){
        return view('teacher/assesment');
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
