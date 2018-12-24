<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cog\Contracts\Love\Likeable\Models\Likeable as LikeableContract;
use Cog\Laravel\Love\Likeable\Models\Traits\Likeable;

class Note extends Model implements LikeableContract
{
    use Likeable;
    
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

    public function violations(){
        return $this->morphMany('App\Violation', 'violatable');
    }

    public function later(){
        return $this->morphMany('App\Later', 'laterable');
    }
}
