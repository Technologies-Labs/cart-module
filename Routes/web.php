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
use \Modules\CartModule\Http\Controllers\CartController;

Route::middleware(['auth'])->group(function () {
    Route::prefix('cart')->group(function () {
        Route::get('/users','CartController@index')->name('carts.index');
    });
});

/**
 *
*/
Route::middleware(['auth'])->group(function () {

    Route::prefix('cart')->group(function () {
        Route::View('/items','cartmodule::website.cart.index')->name('user.cart.items');
    });
});
