<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function exam(){
        return $this->belongsTo('App\Exam');
    }
    public function answerSheets(){
        return $this->hasMany('App\AnswerSheet');
    }
}