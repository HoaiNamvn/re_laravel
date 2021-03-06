<?php

use App\Http\Controllers\AdminPostcontroller;
use App\Http\Controllers\Post1Controller;
use App\Http\Controllers\PostController;
use App\Post;
use App\Role;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
// Route::get('/', function () {
//     return view('welcome');
// });
#2.test1
// Route::get('/v', function () {
//     return "xin chao";
// });
#3.test2
// Route::get('post',function(){
// return " day la trang bai viet";
// });
#4.test include id ingrument
//Route::get('post/{id}', function($id){
//    return $id;
//});
#5. post/1/page/3
// Route::get('posts/{cat_id}/page/{page}', function($cat_id,$page){
//     return $cat_id.'--'.$page;
// });
#6. Đặt tên Route
// Route::get('users/profile', function(){
//     return route('profile');
    // return that route url http/doname
// }) -> name('profile'); // set name to route

// Route::get('admin/product/add', function(){
//     return route('product.add');
// }) -> name('product.add');
#7. url co or khong agrument
// create route with or without option agrument
// users/id
// useers/
// Route::get('users/{id?}', function($id = 0){
//     return $id;
// });
#8. Truy cập tới function detaiil trong Postcontroller
// Route::get('post/{id}', 'PostController@detail');

#9. Đinh tuyến qua controller
// truyên thông số id từ
// Route::get('product/show/{id}','ProductController@show');
// Route::get('product/update/{id}','ProductController@update');
// Route::get('product/create','ProductController@create');


#10. resourse Route
//Route::resource('post', 'PostController');
// Route::get('post/index', 'PostController@index');
// Route::get('admin/post/show', 'AdminPostcontroller@show');


// Route::get('child', function(){
//     return view('child',['data' =>5,'post_title' => "tiêu đề trang con"]);
// });
#11. sentting array data to blade file
// Route::get('demo', function () {
//     $users = array(
//         1 => array(
//             'name' => 'Đoàn Hoài Nam'
//         ),
//         2 => array(
//             'name' => 'Phan Văn Cương'
//         ),
//     );
//     return view('demo', compact('users')) ;
// });
// #bai tap
// Route::get('admin/post/add', 'AdminPostcontroller@add');
// Route::get('admin/post/show', 'AdminPostcontroller@show');
// Route::get('admin/post/update/{id}', 'AdminPostcontroller@update');
// Route::get('admin/post/delete/{id}', 'AdminPostcontroller@delete');



# insert data from route
// Route::get('users/insert', function(){
//     //cần phải thêm module table
//     DB::table('users') -> insert(
//         // chi can dien nhung tu khong bắt buộc phải null
//          ['name' => 'Phan Thu Hang', 'email' => 'hang@gmail.com', 'password'=>bcrypt('hang')]
//     );
// });


// Route::get('posts/add', 'PostController@add');
// Route::get('posts/show', 'PostController@show');
// Route::get('posts/update/{id}', 'PostController@update');
// Route::get('posts/delete/{id}', 'PostController@delete');
// Route::get('posts/permanentlydelete/{id}', 'PostController@permanentlydelete');
// Route::get('posts/restore/{id}', 'PostController@restore');



#BAI TAP

// Route::get('product/show/{id}','ProductController@show');
// Route::get('product/insert','ProductController@insert');
// Route::get('product/update/{id}','ProductController@update');
# eluquent orm
// Route::get('posts/read', function(){
//     // lấy tất cả bản ghi
//     $posts = Post::all();
//     return $posts;
// });
// Route::get('posts/read', 'Postcontroller@read');
// Route::get('featuredimage/read','FeaturedImagescontroller@read');


// Route::get('role/show', 'RoleController@show');

#FORM
Route::get('post/add', 'Postcontroller@add');
Route::post('post/store', 'Postcontroller@store');
Route::get('user/add', function(){
    return view('user/reg');
});
Route::get('post/show', 'Postcontroller@show')->name('post.show');
Route::get('helper/url', 'HelperController@url');
Route::get('helper/string', 'HelperController@string');
Route::get('session/add', 'SessionController@add');
Route::get('session/add_flash', 'SessionController@add_flash');
Route::get('session/show', 'SessionController@show');
Route::get('session/delete', 'SessionController@delete');
Route::get('cookie/set', 'CookieController@set');
Route::get('cookie/get', 'CookieController@get');

//FILE MANAGER
Route::group(['prefix' => 'laravel-filemanager'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});



# MAIL
Route::get('demo/sendmail', 'DemoController@sendmail');

# File manager

Route::group(['prefix' => 'laravel-filemanager',], function () {
   \UniSharp\LaravelFilemanager\Lfm::routes();
});
// mẫ phía trên sẽ bị lỗi thay mã phía dưới

// Route::group(['prefix' => 'laravel-filemanager'],  function () {
//      '\vendor\UniSharp\LaravelFilemanager\Lfm::routes()';
//      });

// Route::group(['middleware' => 'auth'], function () {
//     Route::get('/laravel-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
//     Route::post('/laravel-filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');
//     // list all lfm routes here...
// });

# GIỎ HÀNG
Route::get('/', 'ProductController1@show');

Route::get('cart/show', 'CartController@show');
Route::get('cart/add/{id}', 'CartController@add')->name('cart.add');

Route::get('cart/remove/{rowId}', 'CartController@remove')->name('cart.remove');

Route::get('cart/destroy', 'CartController@destroy')->name('cart.destroy');
ROute::post('cart/update', 'CartController@update')->name('cart.update');
