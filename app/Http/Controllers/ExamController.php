<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function recomended_exam(){
        return view('recomended_exam');
    }
}


