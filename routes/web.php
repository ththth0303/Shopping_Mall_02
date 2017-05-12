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

Route::get('admin', 'AdminController@index')->middleware('admin');
Route::get('/', function () {
    return view('sites.master');
});
//login logout
Route::post('login', 'LoginController@login');
Route::get('login', 'LoginController@checkLogin');
Route::get('logout', 'LoginController@logout');
Route::resource('admin/product', 'ProductController');
