<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnswerSheet extends Model
{
    public function answer(){
        return $this->belongsTo('App\Answer');
    }
}
