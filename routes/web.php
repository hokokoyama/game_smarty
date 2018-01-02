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

Route::get('/admin', function () {
    return view('admin');
});

// usersにアクセスしたら、UserControllerを起動する
Route::resource('users', 'UserController');
// ログインページを表示させるルーティング
Route::get('login', array('uses' => 'HomeController@showLogin'));
// ログインページのポスト機能のルーティング
Route::post('login', array('uses' => 'HomeController@doLogin'));
// ログアウト処理のルーティング
Route::get('logout', array('uses' => 'HomeController@doLogout'));
//公演登録
Route::get('/performanceEntry', 'AdminController@performanceEntry');
