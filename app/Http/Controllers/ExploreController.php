<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;

class ExploreController extends Controller
{
    public function index(){
        $notesOg = Note::with('topic')->with('user')->where('original',true)->orderBy('votes','desc')->limit(8)->get();
        $notes = Note::with('topic')->with('user')->where('original',false)->orderBy('votes','desc')->limit(8)->get();
    return view('explore')->withNotesOg($notesOg)->withNotes($notes);
    }
}
