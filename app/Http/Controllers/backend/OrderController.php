<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function GetListOrder()
    {
        echo "Đây là trang Danh sách đơn hàng";
    }

    public function GetDetail()
    {
        echo "Đây là trang Chi tiết đơn hàng";
    }

    public function GetProcessed()
    {
        echo "Đây là trang đơn hàng đã xử lý";
    }
}
