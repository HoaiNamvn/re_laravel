<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function show($id)
    {
        $products = DB::table('products')
            ->where('id', $id)
            ->get();
        echo "<pre>";
        print_r($products);
        echo "</pre";
    }

    function insert()
    {
        DB::table('products')
            ->insert([
                'id' => 2,
                'name' => 'tieu de 2',
                'price' => 3000,
                'product_cat_id' => 1,
                'user_id' => 3
            ]);
    }
    function update($id)
    {
       DB::table('products')
       ->where('id',$id)
       ->update(
           ['price'=>30000]
       );
    }
}
