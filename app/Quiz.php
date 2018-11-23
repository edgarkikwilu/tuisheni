<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    public function subject(){
        return $this->belongsTo('App\Subject');
    }
    public function topic(){
        return $this->belongsTo('App\Topic');
    }
    public function subTopic(){
        return $this->belongsTo('App\Subtopic');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function taggable(){
        return $this->morphToMany('App\Tag', 'taggable');
    }

    public function questions(){
        return $this->hasMany('App\QuizQuestion');
    }
}
