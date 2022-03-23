<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPostcontroller extends Controller
{
    //
    function add(){
        return view('admin.post.add');
    }
    function update($id){
        return view('admin.post.update', compact('id'));
    }
    function show(){
        return view('admin.post.show');
    }
    function delete($id){
        return "Admin đã xóa bài viết có id : {$id}";
    }
}
