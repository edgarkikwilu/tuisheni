<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    public function carouselImages(){
        return $this->hasMany('App\CarouselImage');
    }
}
