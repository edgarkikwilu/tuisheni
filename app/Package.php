<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public function packageSpecs(){
        return $this->hasMany('App\PackageSpec');
    }
}
