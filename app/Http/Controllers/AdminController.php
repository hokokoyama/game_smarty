<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller{
  /**
   * 公演登録画面
   */
  public function performanceEntry(){
    return view('performanceEntry');
  }

  /**
   * 公演登録実行画面
   */
  public function performanceExec(){
    $id = DB::table('peformance')->insert(
      [
        'name'=>Input::get('name'),
        'reserv_start_time' => Input::get('reserv_start_time'),
        'reserv_end_time' => Input::get('reserv_end_time'),
        'start_time' => Input::get('start_time'),
        'end_time' => Input::get('end_time'),
      ]
    );
    return view('performanceDay', ['mst_peformance_id' => $id]);
  }

  /**
   * 公演リスト画面
   */
  public function performanceList(){
    $performanceData = DB::table('peformance')->get();
    return view('performanceList', ['performanceData' => $performanceData]);
  }

  /**
   * 公演日一覧画面
   */
   public function performanceDay(){
     $id = Input::get('mst_peformance_id');
     $performanceDayData = DB::table('peformance_day')->where('mst_peformance_id', '=', $id)->get();
     return view('performanceDay', ['mstPerformanceId' => $id, 'performanceDayData' => $performanceDayData]);
   }

   /**
    * 公演登録画面
    */
   public function performanceDayEntry(){
     $id = Input::get('mst_peformance_id');
     $performanceDayData = DB::table('peformance')->where('mst_peformance_id', '=', $id)->first();
     return view('performanceDayEntry', ['mstPerformanceId' => $id, 'performanceDayData' => $performanceDayData]);
   }

   /**
    * 公演登録実行画面
    */
   public function performanceDayExec(){
     $id = Input::get('mst_peformance_id');
     DB::table('peformance_day')->insert(
       [
         'mst_peformance_id'=>$id,
         'day' => Input::get('day'),
       ]
     );
     $performanceDayData = DB::table('peformance_day')->where('mst_peformance_id', '=', $id)->get();
     return view('performanceDay', ['mstPerformanceId' => $id, 'performanceDayData' => $performanceDayData]);
   }
}
