<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller{
    //
     function show($id){
        //return "Thông tin sản phẩm id ".$id;
        $price = 10030;
        $colors = ['red', 'green'];
       // return view('product.syohin-ichiran', array('id' => $id, 'price' => $price));   thêm 1 mảng array hoặc dùng compact
       return view('product.syohin-ichiran',compact('id', 'price','colors'));
    }

    function create(){
       // return "Thêm sản phẩm mới ";
       return view('product.create');
    }
    function update($id){
        return "Update sản phẩm có id ".$id;
    }
}

