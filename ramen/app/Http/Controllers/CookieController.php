<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;  // sử dụng để tạo cookie
use Illuminate\Http\Request;

class CookieController extends Controller
{
    function set()
    {
        $response = new Response;
        return $response->cookie('unitop', 'Đây là unitop', 24 * 60); // key , value, time life phut
    }
    function get(Request $request)
    {
        return $request->cookie('unitop');
    }
}
