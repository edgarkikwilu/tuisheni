<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    public function attendances(){
        return $this->hasMany('App\Attendance');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function examType(){
        return $this->belongsTo('App\ExamType');
    }
    public function answers(){
        return $this->hasMany('App\Answer');
    }
    public function markingScheme(){
        return $this->hasOne('App\MarkingScheme');
    }
    public function reports(){
        return $this->hasMany('App\Report');
    }
    public function topStudents(){
        return $this->hasOne('App\TopStudent');
    }

    public function taggable(){
        return $this->morphedToMany('App\Tag', 'taggable');
    }

    public function subject(){
        return $this->belongsTo('App\Subject');
    }
}
