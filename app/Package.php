<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public function packageSpecs(){
<<<<<<< HEAD
        return $this->hasMany('App\PackageSpec');
=======
        return $this->belongsTo('App\PackageSpecs');
>>>>>>> dd0420af0195b97adba604308357b261d6f5d00c
    }
}
