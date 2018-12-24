<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cog\Contracts\Love\Likeable\Models\Likeable as LikeableContract;
use Cog\Laravel\Love\Likeable\Models\Traits\Likeable;

class Quiz extends Model implements LikeableContract
{
    use Likeable;
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

    public function later(){
        return $this->morphMany('App\Later', 'laterable');
    }
}
