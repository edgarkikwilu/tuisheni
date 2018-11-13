<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usage extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
}
