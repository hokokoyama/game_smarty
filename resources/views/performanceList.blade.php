@extends('layouts.default')
@section('content')
<h1>公演リスト</h1>
@foreach($performanceData as $data)
  <a href="/performanceDay?mst_peformance_id={{$data->mst_peformance_id}}" class="btn btn-primary btn-lg">{{$data->name}}</a>
@endforeach
@stop
