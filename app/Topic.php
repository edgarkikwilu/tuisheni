<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    public function quizes(){
        return $this->hasMany('App\Quiz');
    }
    public function subject(){
        return $this->belongsTo('App\Subject');
    }
    public function subTopics(){
        return $this->hasMany('App\Subtopics');
    }

    public function notes(){
        return $this->hasMany('App\Note');
    }
}