<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function attachements(){
        return $this->hasMany('App\Attachement');
    }

    public function comments(){
        return $this->morphMany('App\Comment', 'commentable');
    }

    public function taggable(){
        return $this->morphToMany('App\Tag', 'taggable');
    }

    public function subject(){
        return $this->belongsTo('App\Subject');
    }

    public function topic(){
        return $this->belongsTo('App\Topic');
    }

    public function subtopic(){
        return $this->belongsTo('App\Subtopic');
    }
}
