<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use App\Subject;

use Auth;

class ExploreController extends Controller
{
    public function index(){
        $show = true;
        $notesOg = Note::with('topic')->with('subtopic')->with('user')->where('original',true)->orderBy('votes','desc')->limit(8)->get();
        $notes = Note::with('topic')->with('subtopic')->with('user')->where('original',false)->orderBy('id','desc')->get();
        $subjects = Subject::all();
        $messages = collect([]);
        if (Auth::user() != null) {
            $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();
        }

    return view('explore')->withNotesOg($notesOg)->withNotes($notes)->withSubjects($subjects)->withShow($show)->withMessages($messages);
    }

    public function filterNotes(Request $request){
        $show = false;
        $notes = new Note();
        $notes = $notes->newQuery();
        $subjects = Subject::all();
        $messages = collect([]);
        if (Auth::user() != null) {
            $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();
        }

        if ($request->has('subject') && $request->subject != "") {
            $notes->whereHas('topic', function($query) use ($request){
                $query->where('subject_id',$request->subject);
            });
        }

        if ($request->has('form') && $request->form != "") {
            $notes->where('form', $request->form);
        }

        if ($request->has('username') && $request->form != "") {
            $notes->whereHas('user', function($query) use ($request){
                $query->where('username','like', '%'.$request->username.'%');
            });
        }

        if ($request->has('school') && $request->school != "") {
            // dd('school');
            $notes->whereHas('user', function($query) use ($request){
                $query->where('school','like', '%'.$request->school.'%');
            });
        }

    return view('explore')->withNotes($notes->get())->withSubjects($subjects)->withShow($show)->withMessages($messages);
}
}
