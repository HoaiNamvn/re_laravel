<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class HelperController extends Controller
{
    function url()
    {
        #  1. Tạo url cơ bản
        // $url =url('login');

        # 2. Tạo url qua route , khi ta gán tên cho route thi nó sẻ trả về route đo
        $url = route('post.show');
        # 3.Tạo url qua action
        $url = action('Postcontroller@store');
        # 4.Tạo url Current
        $url = url()->current();
        echo $url;
    }
    function string()
    {
        # 1.Tính độ dài chuổi bao gồm dấu .
        $str_1 = "doanhoainam.vn";
        echo Str::length($str_1) . "<br>";
        # 2.In thương In hoa
        $str_2 = Str::lower($str_1);
        $str_3 = Str::upper($str_1);

        echo $str_2 . "<br>";
        echo $str_3 . "<br>";
        #3. tạo chuổi ngẩu nhiên
        echo Str::random(20) . "<br>";

        # 4. Loại bỏ kí tự dư thừa
        echo Str::of("  doanhoai  nam    ")->trim() . "<br>";

        # 5.Tạo slug làm link thân thiện
        $str_4 = Str::slug("Doanhoainam.vn học để cống hiến ");
        echo $str_4 . "<br>";
        # 6.Tạo chuổi con  lấy từ vị trí thứ n+1(9) trở đi của chuổi và (2)số lượng
        $str_5 = "Laravelnam pro";
        echo Str::of($str_5)->substr(8, 2) . "<br>";

        # 7. Nối chuổi vào đuôi
        echo Str::of('Đoàn Hoài ')->append('Nam') . "<br>";
        # 8. Tìm kiếm và thay thế chuỗi
        $str_6 = "Laravel 7x";
        echo Str::of($str_6)->replace("7x", "6x") . "<br>";
        # 9. Cắt chuổi
        $str_7 = "xin chào tôi tên là đoàn hoài nam tôi nam nay 23 tuổi" . "<br>";
        echo Str::of($str_7)->limit(20, '') . "<br>";

        # 10. kiểm tra chuổi cha có chưa tuổi con không  ok return 1 no 0
        echo Str::contains($str_7, 'nam');
    }
}
