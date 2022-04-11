<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    function show()
    {
        return view('cart.show');
    }

    function add(Request $request, $id)
    {
        // gõ cart xong tab để thêm Facades/cart
        $product = Product::find($id);
        return $product;
        Cart::add([
            'id' => $product->id,
            'name' =>$product->name,
            'qty' => 1,
            'price' =>$product->price,
            // 'options' => ['size' => 'large']
        ]);

        echo "<pre>";
        print_r(Cart::content());
        // return "THêm sản phẩm {$id} vào giỏ hàng ";
    }
}
