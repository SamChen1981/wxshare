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

Route::get('/', function () {
    return view('index');
});

Route::get('/coupon/{app}', 'WaiMaiController@getCoupon');

Route::post('/click', 'WaiMaiController@click');


Route::group(['prefix' => 'about'], function() {
    //关于
    Route::get('/', function () {
        return view('about');
    });

    //捐赠
    Route::get('donate', function () {
        return view('donate');
    });
});