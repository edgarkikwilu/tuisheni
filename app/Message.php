<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //sender id
    public function user(){
        return $this->belongsTo('App\User');
    }
    //recipient will be fetched manually
    public function recipient(){
        return $this->belongsTo('App\User');
    }
}
