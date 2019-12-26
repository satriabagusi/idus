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
Route::get('/products/search/', 'ProductController@search')->name('search');
Route::get('/products/detail/{id}', 'ProductController@show');
Route::post('products/addcart', 'CartController@store')->name('add-cart');
Route::get('/admin', 'AdminController@index');
Route::get('/admin/add-product', 'ProductController@create');
Route::post('/admin/add-product', 'ProductController@store')->name('add-product');
Route::get('/admin/add-admin', 'AdminController@create');
Route::post('/admin/add-admin/add', 'AdminController@store')->name('add-admin');
Route::get('/admin/profile/{id}', 'AdminController@show');
Route::get('/admin/profile/edit/{id}', 'AdminController@edit');
Route::get('/admin/transactions/', 'AdminController@allTransaction');
Auth::routes();


