@extends('layouts.default')
@section('content')
<h1>公演登録</h1>
公演名：{{$performanceDayData->name}}
入力例：2018年1月1日　10時開始　→ 2018-01-01 10:00:00
<form action='/performanceDayExec' method='get'>
  <input type="datetime" name='day' size=20>
  <input type="hidden" name='mst_peformance_id' value={{$mstPerformanceId}}>
  <input type="submit">
</form>
@stop
