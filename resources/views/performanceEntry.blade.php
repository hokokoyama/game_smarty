@extends('layouts.default')
@section('content')
<center>
<h1>公演登録</h1>
<br>
<br>
<div class="container">
    <form action='/performanceExec' method='get'>
        <div class="form-group">
            <label><font size='5'>公演名</font></label>
            <br>
            <input type='text' name='name' size=20>
        </div>
        <div class="form-group">
            <label><font size='5'>予約開始時間</font></label>
            <br>
            <input type='datetime-local' name='reserv_start_time' size=20>
        </div>
        <div class="form-group">
            <label><font size='5'>予約終了時間</font></label>
            <br>
            <input type='datetime-local' name='reserv_end_time' size=20>
        </div>
        <div class="form-group">
            <label><font size='5'>公演開始時間</font></label>
            <br>
            <input type='datetime-local' name='start_time' size=20>
        </div>
        <div class="form-group">
            <label><font size='5'>公演終了時間</font></label>
            <br>
            <input type='datetime-local' name='end_time' size=20>
        </div>
        <button type="submit"><font size='5'>登録</font></button>
    </form>
</div>
</center>
@stop
