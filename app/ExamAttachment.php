<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamAttachment extends Model
{
    public function exam(){
        return $this->belongsTo('App\Exam');
    }
}
