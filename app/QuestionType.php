<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionType extends Model
{
    public function quiztypes(){
        return $this->hasMany('App\QuestionType');
    }
}
