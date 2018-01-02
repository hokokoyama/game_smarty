<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Validator;

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
        // ここではリダイレクト先を/loginに設定していますが、ここは状況に応じて変更してください
        return Redirect::to('login')
        ->with('success', 'ログインしました。');
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
