<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function notes(){
        return $this->morphedbyMany('App\Note','taggable');
    }

    public function tutorials(){
        return $this->morphedbyMany('App\Tutorial','taggable');
    }

    public function exams(){
        return $this->morphedbyMany('App\Exam','taggable');
    }

    public function quizes(){
        return $this->morphedbyMany('App\Quiz','taggable');
    }
}
