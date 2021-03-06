<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cog\Contracts\Love\Likeable\Models\Likeable as LikeableContract;
use Cog\Laravel\Love\Likeable\Models\Traits\Likeable;

class Exam extends Model implements LikeableContract
{
    use Likeable;
    
    public function attendances(){
        return $this->hasMany('App\Attendance');
    }
    public function attachements(){
        return $this->hasMany('App\ExamAttachment');
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
    public function markingSchemes(){
        return $this->hasMany('App\MarkingScheme');
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

    public function comments(){
        return $this->morphMany('App\Comment', 'commentable');
    }

    public function later(){
        return $this->morphMany('App\Later', 'laterable');
    }

    public function violations(){
        return $this->morphMany('App\Violation', 'violatable');
    }
}
