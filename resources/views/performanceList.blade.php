@extends('layouts.default')
@section('content')
<h1>公演リスト</h1>
@foreach($performanceData as $data)
  <a href="#">{{$data->name}}</a>
@endforeach
@stop
