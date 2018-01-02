<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller{
  public function performanceEntry(){
    return view('performanceEntry');
  }
}
