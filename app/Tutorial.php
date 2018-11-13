<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function comments(){
        return $this->morphMany('App\Comment', 'commentable');
    }

    public function taggable(){
        return $this->morphToMany('App\Tag', 'taggable');
    }
}
