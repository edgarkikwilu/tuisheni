<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Violation extends Model
{
    protected $fillable = ['user_id','reported_id','comments'];
    //reporter
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function violatable(){
        return $this->morphTo();
    }
}
