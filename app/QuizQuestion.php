<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuizQuestion extends Model
{
    public function quiz(){
        return $this->belongsTo('App\Quiz');
    }
    public function questionType(){
        return $this->belongsTo('App\QuestionType');
    }
}
