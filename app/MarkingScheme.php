<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarkingScheme extends Model
{
    public function exam(){
        return $this->belongsTo('App\Exam');
    }
}