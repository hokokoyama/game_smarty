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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('home');
});

// usersにアクセスしたら、UserControllerを起動する
Route::resource('users', 'UserController');

Route::get('/home', 'HomeController@index')->name('home');
Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');
Route::view('/register_create', 'RegisterController@create')->name('register_create');
Route::view('/password.request', 'admin')->name('password.request');
