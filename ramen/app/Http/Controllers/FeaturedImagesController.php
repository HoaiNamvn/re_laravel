<?php

namespace App\Http\Controllers;

use App\FeaturedImages;
use Illuminate\Http\Request;

class FeaturedImagesController extends Controller
{
    function read()
    {
        $post = FeaturedImages::find(2)
            ->post;  //post là 1 method trong file FeaturedImages.php 
            return $post;
    }
}
