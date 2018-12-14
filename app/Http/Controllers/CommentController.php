<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Note;
use App\Exam;
use Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{
   
    public function store(Request $request)
    {
        $type = $request->type;
        $type_id = $request->type_id;
        $comment = $request->comment;

        if ($type == 'exam') {
            $exam = Exam::find($request->type_id);
            $exam->comments()->create(['comment'=>$request->comment, 'user_id'=>Auth::user()->id]);
        } else if($type == 'notes') {
            $notes = Note::find($request->type_id);
            $notes->comments()->create(['comment'=>$request->comment, 'user_id'=>Auth::user()->id]);
        }

        $points = DB::table('variables')->select('int_value')->where('name','comment_points')->first();
        // dd($points->int_value);
        Auth::user()->increment('points',$points->int_value);
        $log = new Log();
        $log->user_id = Auth::user()->id;
        $log->ip = "";
        $log->location = "Tanzania";
        $log->description = "Comment points";
        $log->location = "Tanzania";
        $log->points = $points->int_value;
        $log->save();

        return redirect()->back();
        
    }

    public function update(Request $request, Comment $comment)
    {
        //
    }

    public function destroy(Comment $comment)
    {
        //
    }
}
