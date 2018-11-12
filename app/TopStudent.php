<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopStudent extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function subject(){
        return $this->belongsTo('App\Subject');
    }
    public function exam(){
        return $this->belongsTo('App\Exam');
    }
}
