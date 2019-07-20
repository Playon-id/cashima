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

Route::get('/', 'ProductController@dashboard');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('product/index','ProductController@showproduct')->name('product.index');
Route::get('product/detail/{id}','ProductController@detail')->name('product.detail');
Route::get('order/cart','OrderController@cart')->name('order.cart');
Route::get('category/index','CategoryController@showcategory')->name('category.index');
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/tes', function () {
    return "huahuahsushuah";
});
