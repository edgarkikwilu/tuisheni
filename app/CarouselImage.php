<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarouselImage extends Model
{
    public function carousels(){
        return $this->belongsTo('App\Carousel');
    }
}
