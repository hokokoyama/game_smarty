@extends('layouts.default')
@section('content')

<center><h1>ログイン</h1></center>

{{-- ログイン時にフラッシュメッセージを表示 --}}
@if(Session::has('success'))
	<div class="bg-info">
		<p>{{ Session::get('success') }}</p>
	</div>
@endif

<div id="login">
{{ Form::open(array('url' => 'login', 'class' => 'form-horizontal')) }}
  {{ csrf_field() }}
	<div class="form-group">
		{{-- バリデーションのエラー表示 --}}
		@foreach($errors->get('email') as $message)
			<span class="bg-danger">{{ $message }}</span>
		@endforeach
		<span class="fontawesome-user"></span>
		<input type="text" id="user" name="email" placeholder="email">
	</div>

	<div class="form-group">
		{{-- バリデーションのエラー表示 --}}
		@foreach($errors->get('password') as $message)
			<span class="bg-danger">{{ $message }}</span>
		@endforeach
		<span class="fontawesome-lock"></span>
		<!--<label for="password" class="col-sm-2 control-label">パスワード</label>-->
		<input type="password" id="pass" name="password" placeholder="Password">
	</div>

	<div class="form-group">
		<input type="submit" class="btn btn-primary" value="ログインする"></button>
	</div>

{{ Form::close() }}
@stop
