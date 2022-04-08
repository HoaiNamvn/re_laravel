<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController1 extends Controller
{
        function show(){
            return view('product.show');
        }
}
