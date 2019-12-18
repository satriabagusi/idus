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

Route::get('/', 'PagesController@index');
Route::get('/products','ProductController@index');
Route::get('/admin', 'AdminController@index');
Route::get('/admin/add-product', 'AdminController@create')->name('add-product');
Route::post('/admin/add-product/add', 'AdminController@store');
Auth::routes();


