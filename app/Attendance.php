<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function exam(){
        return $this->belongsTo('App\Exam');
    }
}
