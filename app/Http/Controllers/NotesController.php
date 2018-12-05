<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use App\Attachement;

use Auth;
use File;

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
