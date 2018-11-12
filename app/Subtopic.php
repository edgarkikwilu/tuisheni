<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subtopic extends Model
{
    public function quizes(){
        return $this->hasMany('App\Quiz');
    }
}
