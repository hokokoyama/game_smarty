@extends('layouts.default')
@section('content')

<h1>メンバ登録</h1>

{{-- メンバ登録完了時にフラッシュメッセージを表示 --}}
@if(Session::has('success'))
	<div class="bg-info">
		<p>{{ Session::get('success') }}</p>
	</div>
@endif

{{ Form::open(['route' => 'users.store'], array('class' => 'form-horizontal')) }}
	<div class="form-group">
		{{-- バリデーションのエラー表示 --}}
		@foreach($errors->get('name') as $message)
			<span class="bg-danger">{{ $message }}</span>
		@endforeach
		<label for="name" class="col-sm-2 control-label">名前</label>
		<div class="col-sm-10">
			<input name="name" type="name" class="form-control">
		</div>
	</div>

	<div class="form-group">
		{{-- バリデーションのエラー表示 --}}
		@foreach($errors->get('email') as $message)
			<span class="bg-danger">{{ $message }}</span>
		@endforeach
		<label for="email" class="col-sm-2 control-label">メールアドレス</label>
		<div class="col-sm-10">
			<input name="email" type="email" class="form-control">
		</div>
	</div>

	<div class="form-group">
		{{-- バリデーションのエラー表示 --}}
		@foreach($errors->get('password') as $message)
			<span class="bg-danger">{{ $message }}</span>
		@endforeach
		<label for="password" class="col-sm-2 control-label">パスワード</label>
		<div class="col-sm-10">
			<input name="password" type="password" class="form-control">
		</div>
	</div>

	<div class="form-group">
		{{-- バリデーションのエラー表示 --}}
		@foreach($errors->get('password_confirmation') as $message)
			<span class="bg-danger">{{ $message }}</span>
		@endforeach
		<label for="password_confirmation" class="col-sm-2 control-label">パスワードの確認</label>
		<div class="col-sm-10">
			<input name="password_confirmation" type="password" class="form-control">
		</div>
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-primary">メンバ登録する</button>
	</div>

{{ Form::close() }}

@stop
