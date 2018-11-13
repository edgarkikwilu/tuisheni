<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuizAnswer extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function quizQuestion(){
        return $this->belongsTo('App\QuizQuestion');
    }
    public function quiz(){
        return $this->belongsTo('App\Quiz');
    }
}
