<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachement extends Model
{
    public function note(){
        return $this->belongsTo('App\Note');
    }
    public function exam(){
        return $this->belongsTo('App\Exam');
    }
    public function chat(){
        return $this->belongsTo('App\Chat');
    }
}
