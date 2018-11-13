<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recommendee extends Model
{
    public function recommendation(){
        return $this->belongsTo('App\Recommendation');
    }
}
