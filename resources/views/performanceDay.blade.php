@extends('layouts.default')
@section('content')
<h1>公演日一覧</h1>
<a href='/performanceDayEntry?mst_peformance_id={{$mstPerformanceId}}'>公演日登録</a>
@foreach($performanceDayData as $data)
  {{$data->day}}
@endforeach
@stop
