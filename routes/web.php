<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// แบบไม่มีข้อมูล
// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/product', function () {
//     return view('product');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

// แบบมีข้อมูลส่งไปแบบบังคับ
Route::get('/product/id/{id}/name/{name}', function ($id, $name) {
    // return view('home');
    echo "รหัสสินค้า : ". $id;
    echo "<br>";
    echo "ชื่อสินค้า : ". $name;
})->name('product');

// แบบมีข้อมูลส่งไปด้วยไม่บังคับ
Route::get('/home/name/{name?}', function ($name = "defalut") {
    echo "ชื่อบ้าน : ". $name;
});

// แบบตั้งชื่อกลุ่ม
Route::prefix('about')->group(function(){
    Route::get('/', function () {
        echo "หน้า about";
    });
    Route::get('/{id}', function ($id) {
        echo "หน้า about";
        echo "<br>";
        echo "รหัสพนักงาน : " . $id;
    });
    Route::get('/{id}/{name}', function ($id, $name) {
        echo "หน้า about";
        echo "<br>";
        echo "รหัสพนักงาน : " . $id;
        echo "<br>";
        echo "ชื่อพนักงาน  : " . $name;
    });
});