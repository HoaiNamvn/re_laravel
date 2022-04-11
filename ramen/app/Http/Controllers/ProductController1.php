<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Product;

class ProductController1 extends Controller
{
    function show()
    {
        $products = Product::all();
        // return $products;
        return view('product.show', compact('products'));
    }
}
