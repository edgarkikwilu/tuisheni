<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exam;
use Carbon\carbon;

class ExamController extends Controller
{
    public function recomended_exam(){
        return view('recomended_exam');
    }
    public function index(){
        $week = date('W');
        $recommended = Exam::with('subject')->with('user')->with('examType')->where('original',true)->where('week',$week)->orderBy('id','desc')->get();
        $other = Exam::with('subject')->with('examType')->with('user')->where('original',false)->where('week',$week)->orderBy('id','desc')->get();

        return view('examination')->withRecommended($recommended)->withOther($other);
    }
    public function examination (){
        return view ('examination');
    }
}


