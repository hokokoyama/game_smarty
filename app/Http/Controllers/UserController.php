<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
  public function create()
  {
    return View::make('users.create');
  }

  public function store()
  {
    $rules = [
      'email' => 'required|email|unique:users',
      'password'=>'required|confirmed',
      'password_confirmation' => 'required',
    ];

    $messages = array(
      'email.required' => 'メールアドレスを正しく入力してください。',
      'password.required' => 'パスワードを正しく入力してください。',
      'password_confirmation.required' => 'パスワードが一致しません。',
    );

    $validator = Validator::make(Input::all(), $rules, $messages);

    if ($validator->passes()) {
      $user = new User;
      $user->email = Input::get('email');
      $user->password = Hash::make(Input::get('password'));
      $user->phone = Input::get('phone');
      $user->save();
      return Redirect::route('users.create')
        ->with('success', '会員登録しました。');
    }else{
      return Redirect::route('users.create')
        ->withErrors($validator)
        ->withInput();
    }
  }
  public function show(){

  }
}
