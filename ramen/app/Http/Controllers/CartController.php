<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    function show(){
        return view('cart.show');
    }
}
