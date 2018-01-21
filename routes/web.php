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



Route::view('/', 'login');

// usersにアクセスしたら、UserControllerを起動する
Route::resource('users', 'UserController');
// ログインページを表示させるルーティング
Route::get('login', array('uses' => 'HomeController@showLogin'))->middleware('beforerun');
// ログインページのポスト機能のルーティング
Route::post('login', array('uses' => 'HomeController@doLogin'))->middleware('beforerun');
// ログアウト処理のルーティング
Route::get('logout', array('uses' => 'HomeController@doLogout'))->middleware('beforerun');
//管理画面トップ
Route::get('/admin', 'AdminController@top')->middleware('beforerun');
//公演登録
Route::post('/performanceEntry', 'AdminController@performanceEntry')->middleware('beforerun');
//公演登録実行
Route::get('/performanceExec', 'AdminController@performanceExec')->middleware('beforerun');
//公演リスト
Route::get('/performanceList', 'AdminController@performanceList')->middleware('beforerun');
//公演日一覧
Route::get('/performanceDay', 'AdminController@performanceDay')->middleware('beforerun');
//公演日登録実行
Route::get('/performanceDayExec', 'AdminController@performanceDayExec')->middleware('beforerun');
//公演登録
Route::get('/performanceDayEntry', 'AdminController@performanceDayEntry')->middleware('beforerun');
