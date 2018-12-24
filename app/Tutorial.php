<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cog\Contracts\Love\Likeable\Models\Likeable as LikeableContract;
use Cog\Laravel\Love\Likeable\Models\Traits\Likeable;

class Tutorial extends Model implements LikeableContract
{
    use Likeable;
    
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function comments(){
        return $this->morphMany('App\Comment', 'commentable');
    }

    public function taggable(){
        return $this->morphToMany('App\Tag', 'taggable');
    }

    public function later(){
        return $this->morphMany('App\Later', 'laterable');
    }
}
