<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function quizes(){
        return $this->hasMany('App\Quiz');
    }
    public function topics(){
        return $this->hasMany('App\Topic');
    }
    public function topStudents(){
        return $this->hasMany('App\TopStudent');
    }

    public function exams(){
        return $this->hasMany('App\Exam');
    }

    public function notes(){
        return $this->hasMany('App\Note');
    }

    public function awards(){
        return $this->hasMany('App\Award');
    }
}
