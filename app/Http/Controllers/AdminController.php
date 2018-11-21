<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admindash(){
        return view('admin/admindash');
    }
    public function users(){
        return view('admin/users');
    }
    public function notes(){
        return view('admin/notes');
    }
    public function examinations(){
        return view('admin/examinations');
    }
    public function topics(){
        return view('admin/topics');
    }
    public function quizzes(){
        return view('admin/quizzes');
    }
    public function results(){
        return view('admin/results');
    }
    public function awards(){
        return view('admin/awards');
    }
    public function payments(){
        return view('admin/payments');
    }
    public function advertisements(){
        return view('admin/advertisements');
    }
    public function violations(){
        return view('admin/violations');
    }
    
}
