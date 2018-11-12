<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExploreController extends Controller
{
    public function index(){
        $notesOg = Note::with('tags')->where('original',true)->orderBy('votes')->limit(8)->get();
        $notes = Note::with('tags')->where('original',false)->orderBy('votes')->limit(8)->get();
    return view('explore')->withNotesOg($notesOg)->withNotes($notes);
    }
}
