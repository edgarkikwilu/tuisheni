<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageSpec extends Model
{
    public function package(){
        return $this->belongsTo('App\Package');
    }
}