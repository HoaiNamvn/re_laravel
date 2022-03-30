<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeaturedImages extends Model
{
    function Post(){
        return $this->belongsTo('App\Post');
    }
}
