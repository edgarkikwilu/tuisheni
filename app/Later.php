<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Later extends Model
{
    protected $fillable = [
        'user_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function laterable(){
        return $this->morphTo();
    }
}
