<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
  public function showLogin(){
    return View::make('login');
  }

  public function doLogin(){
    $credentials = [
      'email'=>Input::get('email'),
      'password'=>Input::get('password')
    ];

    $rules = [
      'email'=>'required',
      'password'=>'required'
    ];

    $messages = array(
      'email.required' => 'メールアドレスを正しく入力してください。',
      'password.required' => 'パスワードを正しく入力してください。',
    );

    $validator = Validator::make($credentials, $rules, $messages);

    if ($validator->passes()) {
      if (Auth::attempt($credentials)) {
        $uid = DB::table('users')->where('email', Input::get('email'))->value('id');
        return view('admin',['userID' => $uid]);
      }else{
        return Redirect::back()->withInput();
      }
    }else{
      return Redirect::back()
      ->withErrors($validator)
      ->withInput();
    }
  }

  public function doLogout(){
    Auth::logout();
    return Redirect::to('login');
  }
}
