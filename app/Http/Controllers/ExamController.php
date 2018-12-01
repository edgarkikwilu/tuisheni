<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exam;
use App\Subject;
use Carbon\carbon;

class ExamController extends Controller
{
    public function recomended_exam(){
        return view('recomended_exam');
    }
    public function index(){
        $week = date('W');
        $subjects = Subject::all();
        $show = true;
        $recommended = Exam::with('subject')->with('user')->with('examType')->where('original',true)
        ->where('week',$week)->orderBy('id','desc')->get();
        $other = Exam::with('subject')->with('examType')->with('user')->where('original',false)
        ->where('week',$week)->orderBy('id','desc')->get();

        return view('examination/examination')->withRecommended($recommended)->withOther($other)->withSubjects($subjects)->withShow($show);
    }

    public function filterExams(Request $request){
        $exams = new Exam();
        $exams = $exams->newQuery();
        $recommended;
        $show = false;
        $others;
        $subjects = Subject::all();

        if ($request->has('subject') && $request->subject != "") {
            $exams->where('subject_id', $request->subject);
        }

        if ($request->has('form') && $request->form != "") {
            $exams->where('form',$request->form);
        }

        if ($request->has('title') && $request->title != "") {
            $exams->where('title',$request->title);
        }

        if ($request->has('username') && $request->username != "") {
            $exams->whereHas('user', function($query) use ($request){
                $query->where('username','like', '%'.$request->username.'%');
            });
        }

        if ($request->has('school') && $request->school != "") {
            $exams->whereHas('user', function($query) use ($request){
                $query->where('school','like', '%'.$request->school.'%');
            });
        }

        return view('examination/examination')->withexams($exams->get())->withSubjects($subjects)->withShow($show);
    }
    public function single_exam (){
        return view ('examination/single_exam');
    }
}


