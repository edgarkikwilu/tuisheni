<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use App\Subject;
use App\Log;
use App\Attachement;
use App\Message;

use Auth;
use File;
use Carbon\Carbon;
use DB;

class NotesController extends Controller
{
    public function store(Request $request){
        
        $request->validate([
            'form'=>'bail|required|integer|max:6',
            'subject'=>'required|integer|max:100',
            'topic'=>'required|integer|max:10000',
            'subtopic'=>'integer|max:100000',
            'title'=>'string|max:100',
            'article'=>'required|string'
        ]);

        $date = Carbon::now();

        $notes = new Note();
        $notes->user_id = Auth::user()->id;
        $notes->form = $request->form;
        $notes->topic_id = $request->topic;
        $notes->subtopic_id = $request->subtopic;
        $notes->week = $date->weekNumberInMonth;
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
            $points = DB::table('variables')->select('int_value')->where('name','notes_post_points')->first();
            Auth::user()->increment('points',$points->int_value);
            
            $log = new Log();
            $log->user_id = Auth::user()->id;
            $log->ip = "";
            $log->location = "Tanzania";
            $log->description = "Post Notes";
            $log->location = "Tanzania";
            $log->type = "Notes";
            $log->points = $points->int_value;
            $log->week = $date->weekNumberInMonth;
            $log->save();
        }else{
            return redirect()->back()->withInput();    
        }
        return redirect()->back();
    }

    public function editNotes($id){
        $notes = Note::findOrFail($id);
        $subjects = Subject::all();
        return view('teacher.edit_notes')->withNotes($notes)->withSubjects($subjects);
    }

    public function updateNotes(Request $request){
        
        $request->validate([
            'form'=>'bail|required|integer|max:6',
            'subject'=>'required|integer|max:100',
            'topic'=>'required|integer|max:10000',
            'subtopic'=>'integer|max:100000',
            'title'=>'string|max:100',
            'article'=>'required|string'
        ]);

        $date = Carbon::now();

        $notes = Note::findOrFail($request->id);
        $notes->user_id = Auth::user()->id;
        $notes->form = $request->form;
        $notes->topic_id = $request->topic;
        $notes->subtopic_id = $request->subtopic;
        $notes->week = $date->weekNumberInMonth;
        $notes->title = $request->title;
        $notes->article = $request->article;
        $notes->original = false;

        if ($notes->save()) {
            if ($request->hasFile('attachments')) {
                $i = 0;
                foreach ($request->file('attachments') as $attachment) {    
                    $notes = Note::findOrFail($notes->id);

                    $attachment = new Attachement();
                    $attachment->note_id  = $notes->id;
                    $attachment->filename = $filename;
                    $notes->$attachment()->associate($attachment);

                        if ($attachment->save()) {
                            $i = $i + 1;
                            if($i < 7){
                            $filename = time().$attachment->getClientOriginalName();
                            $attachment->storeAs('attachments',$filename);
                        }
                    }
                }
            }
            $points = DB::table('variables')->select('int_value')->where('name','notes_post_points')->first();
            Auth::user()->increment('points',$points->int_value);
            
            $log = new Log();
            $log->user_id = Auth::user()->id;
            $log->ip = "";
            $log->location = "Tanzania";
            $log->description = "Updated Notes";
            $log->location = "Tanzania";
            $log->points = $points->int_value;
            $log->week = $date->weekNumberInMonth;
            $log->save();
        }else{
            return redirect()->back()->withInput();    
        }
        return redirect()->back();
    }

    public function showNotes($id){
        $notes = Note::findOrFail($id);

        return view('teacher/show_notes')->withNotes($notes);
    }

    public function deleteNotes(Request $request){
        if (Auth::user()->type == 'student') {
            $notes = Note::findOrFail($request->id);
            $notes->attachements()->delete();
            $notes->delete();
            $notes = Note::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
            $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();
            $later = Note::whereLikedBy(Auth::user()->id)->with('likesCounter')->get();
            // dd($later);
            $subjects = Subject::all();
            return view('student/notes')->withNotes($notes)->withSubjects($subjects)->withLater($later)->withMessages($messages);
            return view('student/notes')->withSubjects($subjects)->withLater($later);
        } else if (Auth::user()->type == 'teacher') {
            $notes = Note::findOrFail($request->id);
            $notes->attachements()->delete();
            $notes->delete();
            $subjects = Subject::all();
            return view('teacher/notes')->withSubjects($subjects);
        } 
        
    }

    public function show($filename){
        $file = storage_path('app/attachments/'.$filename);
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
}
