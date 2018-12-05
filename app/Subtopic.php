<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subtopic extends Model
{
    public function quizes(){
        return $this->hasMany('App\Quiz');
    }
    public function topic(){
        return $this->belongsTo('App\Topic');
    }

    public function notes(){
        return $this->hasMany('App\Note');
    }
}
