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
Route::get('/admin', 'AdminController@index');
Route::get('/admin/add-product', 'ProductController@create');
Route::post('/admin/add-product', 'ProductController@store')->name('add-product');
Route::get('/admin/add-admin', 'AdminController@create');
Auth::routes();


