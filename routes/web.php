<?php

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
//backend
Route::get('login','backend\LoginController@GetLogin');


Route::group(['prefix' => 'admin'], function () {
    Route::get('','backend\AdminController@GetIndex');

    //category
    Route::group(['prefix' => 'category'], function () {
        Route::get('','backend\CategoryController@GetCategory');
        Route::get('edit','backend\CategoryController@GetEditCategory');
    });

    //product
    Route::group(['prefix' => 'product'], function () {
        Route::get('','backend\ProductController@GetListProduct');
        Route::get('add','backend\ProductController@GetAddProduct');
        Route::get('edit','backend\ProductController@GetEditProduct');
    });

    //user
    Route::group(['prefix' => 'user'], function () {
        Route::get('','backend\UserController@GetListUser');
        Route::get('add','backend\UserController@GetAddUser');
        Route::get('edit','backend\UserController@GetEditUser');
    });

    //order
    Route::group(['prefix' => 'order'], function () {
        Route::get('','backend\OrderController@GetListOrder');
        Route::get('detail','backend\OrderController@GetDetail');
        Route::get('processed','backend\OrderController@GetProcessed');
    });





});








// --------------------------------
// Route::get('đường dẫn',hành động)

//hành động : có thể là function() hoặc đường đẫn tới controller

Route::get('','TestController@hello');

Route::get('san-pham/aodep.html','TestController@GetAo' );

//truyền tham số trên route

Route::get('thamso/{id}/{thamso2}','TestController@GetThamSo');

// truyền tham số mặc định trong route

Route::get('sanpham/{id?}/{name?}', function ($id='1',$name='mặc định') {
    echo 'sản phẩm có id :'.$id;
    echo '<br>sản phẩm có tên là :'.$name;
});


//chuyển hướng trang
Route::get('trang-chu', function () {
    echo 'Đây là trang chủ';
});
Route::get('chuyen-huong', function () {
    //chuyển hướng đến route có URL:trang-chu
    return redirect('trang-chu');
});


//Group route
Route::group(['prefix' => 'san-pham'], function () {
    Route::get('', function () { echo 'Đây là danh sách sản phẩm'; });
    Route::get('add', function () { echo 'Đây là trang thêm sản phẩm'; });
    Route::get('edit', function () { echo 'Đây là trang sửa sản phẩm'; });
});







