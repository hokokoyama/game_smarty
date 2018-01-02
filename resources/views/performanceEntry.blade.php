@extends('layouts.default')
@section('content')
<h1>公演登録</h1>
<form action='performanceExec' method='post'>
  <input type="text" name='name' size=20>
  <input type="submit">
</form>
@stop
