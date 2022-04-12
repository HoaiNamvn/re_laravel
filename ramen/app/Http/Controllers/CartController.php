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
        // Cart::destroy();
        // gõ cart xong tab để thêm Facades/cart
        $product = Product::find($id);
        // return $product;
        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->price,
            'options' => ['thumbnail' => $product->thumbnail]
        ]);
        // echo "<pre>";
        // print_r(Cart::content());
        return redirect('cart/show');
    }

    function remove($rowId){
        Cart::remove($rowId);
        return redirect('cart/show');
    }

    # xoa all cart
    function destroy(){
        Cart::destroy();
        return redirect('cart/show');
    }

    # update cart
    function update(Request $request){
        // dd($request->all());
        // return $request->all();
        $data = $request->get('qty');

        foreach($data as $k=>$v){
            Cart::update($k,$v);
        }
        return redirect('cart/show');

    }
}
