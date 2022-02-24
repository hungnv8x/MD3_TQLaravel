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

Route::get('/calculate', function () {
    return view('calculate_discount');
});

Route::post('/display',function (Illuminate\Http\Request $request){
    $discountAmount = $request->price * $request->discount * 0.01;
    $discountPrice = $request->price - $discountAmount;
    return view('display_discount', compact(['discountAmount','discountPrice']));
});
