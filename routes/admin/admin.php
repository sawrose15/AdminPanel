<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('Admin/Dashboard/dashboard');
});

Route::resource('dash','admin\DashboardController');
Route::resource('login','login\LoginController');
Route::resource('/user','admin\UserController');
Route::resource('/category','admin\CategoryController');
