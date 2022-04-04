<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    function add(Request $request)
    {  # Cách bình thường
        // $request->session()->put('user_name', 'Hoai Nam');
        // $request->session()->put('login', true);
        # Thông qua helpper
        session(['user_name' => ' Hoai Nam']);
    }
    function show(Request $request)

    {   ##-------THEO CACH BINH THUONG-------##
        # check xem đã lưu session dk chưa
        // if($request->session()->has('user_name')){
        //     echo " Đã lưu sesion user nam vao sesion ";
        // }
        #lấy toàn bộ thông tin sesion
        // return $request->session()->all();
        #Lấy thuộc tính user name thôi
        // return $request->session()->get('user_name');
        // return $request->session()->get('status');
        ##-------THEO HELPPER---------##
        return session('user_name');
    }

    function add_flash(Request $request)
    {
        $request->session()->flash('status', 'Bạn đã thêm sản phẩm thành công');
    }

    function delete(Request $request)
    {   #Xóa 1 phần tử sesion
        // $request->session()->forget('user_name');
        #Xóa tất cả
        $request->session()->flush();
    }
}
