<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function hello() {
        echo 'Xin chào 1 <br>';
        return "XIN chào học viên việt pro";
    }

    public function GetAo() {
        echo 'Đây là sản phẩm áo đẹp';
    }

    public function GetThamSo($id,$thamso2)
    {
        echo 'tham số là :'.$id;
        echo '<br>tham số 2 là :'.$thamso2; 
    }
}
