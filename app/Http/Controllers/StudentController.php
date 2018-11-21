<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studentdash(){
        return view('student/studentdash');
    }
    public function notes(){
        return view('student/notes');
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
}
