<?php

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

Route::get('/dictionary', function () {
    return view('dictionary');
});

Route::post('/dictionary', function (Illuminate\Http\Request $request) {
    $dictionary = ["Hello" => "Xin chào", "Cat" => "Con mèo", "By"=>"Tạm biệt","Good"=>"Tốt"];
    if (array_key_exists($request->en,$dictionary)){
        $en = $request->en;
        $vn = $dictionary[$request->en];
        return view('dictionary',compact(['en','vn']));
    }else{
        echo "Chưa cập nhập từ này";
    }
});
