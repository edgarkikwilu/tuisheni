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

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
}
