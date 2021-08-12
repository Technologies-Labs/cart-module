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

use Illuminate\Support\Facades\Route;

Route::get('carts','CartController@index')->name('carts.index');
Route::get('carts/add_product/{id}','CartController@addProduct')->name('carts.add.product');
Route::get('/products_cart/{id}','CartController@cart');
Route::middleware(['auth'])->get('user/cart', function () {
    return view('cartmodule::website.cart');
});
