<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exam;
use App\Subject;
use Carbon\carbon;

use Auth;

class ExamController extends Controller
{
    public function recomended_exam(){
        return view('recomended_exam');
    }
    public function index(){
        $week = date('W');
        $subjects = Subject::all();
        $show = true;
        $recommended = Exam::with('subject')->with('user')->with('examType')->where('original',true)->orderBy('id','desc')->get();
        $other = Exam::with('subject')->with('examType')->with('user')->where('original',false)->orderBy('id','desc')->get();
        $exams = collect([]);
        $messages = collect([]);
        if (Auth::user() != null) {
            $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();
        }
        return view('examination/examination')->withRecommended($recommended)->withOther($other)->withSubjects($subjects)->withShow($show)->withExams($exams)->withMessages($messages);
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
            $exams->where('title','like', '%'.$request->title.'%');
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

        $messages = collect([]);
        if (Auth::user() != null) {
            $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();
        }

        return view('examination.examination')->withexams($exams->get())->withSubjects($subjects)->withShow($show)->withMessages($messages);
    }
    public function single_exam ($id){
        $exam = Exam::with('user')->with('attachements')->with('examType')->where('id',$id)->first();
        $exam->increment('views');
        $messages = collect([]);
        if (Auth::user() != null) {
            $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();
        }

        $subjects = Subject::all();

        return view ('examination/single_exam')->withExam($exam)->withMessages($messages)->withSubjects($subjects);
    }

    public function show($filename){
        $file = storage_path('app/exam_attachments/'.$filename);
        $path = str_replace('/', '\\', $file);
        // check if the file exists
        if (file_exists($path)) {
            //dd('file found');
            // Get the file content to put into your response
            $content = file_get_contents($file);
            //Build your Laravel Response with your content, the HTTP code and the Header application/pdf
            //return Response::make($content, 200, array('content-type'=>'application/pdf'));
            return response($content, 200)
              ->header('Content-Type',  array('content-type'=>'*'));
        }else{
            dd('file not found');
        }
    }

    public function store(Request $request){
        $request->validate([
            'form'=>'bail|required|integer|max:6',
            'subject'=>'required|integer|max:100',
            'topic'=>'required|integer|max:10000',
            'subtopic'=>'integer|max:100000',
            'title'=>'string|max:100',
            'article'=>'required|string'
        ]);

        $notes = new Note();
        $notes->user_id = Auth::user()->id;
        $notes->form = $request->form;
        $notes->topic_id = $request->topic;
        $notes->subtopic_id = $request->subtopic;
        $notes->week = date('W');
        $notes->title = $request->title;
        $notes->article = $request->article;
        $notes->original = false;

        if ($notes->save()) {
            if ($request->hasFile('attachments')) {
                $i = 0;
                foreach ($request->file('attachments') as $attachment) {
                    $i = $i + 1;
                    if($i < 7){
                    $filename = time().$attachment->getClientOriginalName();
                    $attachment->storeAs('attachments',$filename);
    
                    $attachment = new Attachement();
                    $attachment->note_id  = $notes->id;
                    $attachment->filename = $filename;
                    $attachment->save();
                    }
                }
            }
        }else{
            return redirect()->back()->withInput();    
        }
        return redirect()->back();
    }

}


