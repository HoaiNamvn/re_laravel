<?php

use App\Http\Controllers\AdminPostcontroller;
use App\Http\Controllers\Post1Controller;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
#1. root
Route::get('/', function () {
    return view('welcome');
});
#2.test1
Route::get('/v', function () {
    return "xin chao";
});
#3.test2
Route::get('post',function(){
return " day la trang bai viet";
});
#4.test include id ingrument
//Route::get('post/{id}', function($id){
//    return $id;
//});
#5. post/1/page/3
Route::get('posts/{cat_id}/page/{page}', function($cat_id,$page){
    return $cat_id.'--'.$page;
});
#6. Đặt tên Route
Route::get('users/profile', function(){
    return route('profile');
    // return that route url http/doname
}) -> name('profile'); // set name to route

Route::get('admin/product/add', function(){
    return route('product.add');
}) -> name('product.add');
#7. url co or khong agrument
// create route with or without option agrument
// users/id
// useers/
Route::get('users/{id?}', function($id = 0){
    return $id;
});
#8. Truy cập tới function detaiil trong Postcontroller
// Route::get('post/{id}', 'PostController@detail');

#9. Đinh tuyến qua controller
// truyên thông số id từ
Route::get('product/show/{id}','ProductController@show');
Route::get('product/update/{id}','ProductController@update');
Route::get('product/create','ProductController@create');


#10. resourse Route
//Route::resource('post', 'PostController');
Route::get('post/index', 'PostController@index');
Route::get('admin/post/show', 'AdminPostcontroller@show');


Route::get('child', function(){
    return view('child',['data' =>5,'post_title' => "tiêu đề trang con"]);
});
#11. sentting array data to blade file 
Route::get('demo', function () {
    $users = array(
        1 => array(
            'name' => 'Đoàn Hoài Nam'
        ),
        2 => array(
            'name' => 'Phan Văn Cương'
        ),
    );
    return view('demo', compact('users')) ;
});
#bai tap
Route::get('admin/post/add', 'AdminPostcontroller@add');
Route::get('admin/post/show', 'AdminPostcontroller@show');
Route::get('admin/post/update/{id}', 'AdminPostcontroller@update');
Route::get('admin/post/delete/{id}', 'AdminPostcontroller@delete');