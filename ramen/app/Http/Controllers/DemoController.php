<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;

class DemoController extends Controller
{
    function sendmail(){
        $data =[
            'key1'=>'Dữ liệu động được truyền vào từ controller'
        ];
        Mail::to('doanhoainam098@gmail.com')->send(new DemoMail($data));
    }
}
