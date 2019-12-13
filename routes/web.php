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

use App\Cart;
use App\User;

Route::get('/', function () {
    $id = Auth::user()->id;
    $count = Cart::where('user_id', $id)->count();
    return view('index', compact('count'));
});
Auth::routes();


