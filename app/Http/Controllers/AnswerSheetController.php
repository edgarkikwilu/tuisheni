<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnswerSheetController extends Controller
{
    public function show($filename){
        $file = storage_path('app/answer_sheets/'.$filename);
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
