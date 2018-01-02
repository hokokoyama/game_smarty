<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller{
  /**
   * 公演登録画面
   */
  public function performanceEntry(){
    return view('performanceEntry');
  }

  public function performanceExec(){
    return view('performanceDay');
  }

  /**
   * 公演日一覧画面
   */
   public function performanceDay(){
     return view('performanceDay');
   }
}
