<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Auth;
use Session;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::user()) {
           // dd($request);
            if ($request->ajax()) {
                $request->validate([
                    // 'user_id'=>'bail|required|integer',
                    'recipient_id'=>'required|integer',
                    'title'=>'string|max:50',
                    'description'=>'string|min:3|max:255'
                ]);
                $message = new Message();
                $message->user_id = Auth::user()->id;
                $message->recipient_id = $request->recipient_id;
                $message->title = $request->title;
                $message->description = $request->description;
                
                if ($message->save()) {
                    return response()->json(['success'=>'Message sent succesfully']);
                } else {
                    return response()->json(['error'=>'please login first']);
                }
            }
        } else {
            // dd($request);
            return response()->json(['error'=>'please login first']);
        }
    }

    public function fetchMessages(Request $request){
        $messages = Message::where('recipient_id',Auth::user()->id)->where('read',false)->get();
        return response()->json($messages->toArray());
    }
    public function read(Request $request){
        if ($request->ajax()) {
            $message = Message::findOrFail($request->id);
            $message->read = true;
            $message->save();
            return response()->json(['success'=>true]);
        }
    }

    public function destroy(Message $message)
    {
        //
    }
}
