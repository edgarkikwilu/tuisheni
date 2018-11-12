<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    public function attachements(){
        return $this->hasMany('App\Attachement');
    }
    //sender 
    public function user(){
        return $this->belongsTo('App\User');
    }
    //recipient will be fetched manually
}

