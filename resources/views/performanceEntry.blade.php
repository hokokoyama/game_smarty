@extends('layouts.default')
@section('content')
<h1>公演登録</h1>
<form action='/performanceExec' method='get'>
  <input type="text" name='name' size=20>
  <input type='text' name='reserv_start_time' size=20>
  <input type='text' name='reserv_end_time' size=20>
  <input type='text' name='start_time' size=20>
  <input type='text' name='end_time' size=20>
  <input type="submit">
</form>
@stop
