@extends('layouts.default')
@section('content')
<h1>管理画面</h1>
<form method="post" name="form1" action="users/create">
  <input type="hidden" name="user_id" value={{$userID}}>
  <a href="javascript:form1.submit()">メンバー登録</a>
</form>
 <a href='users/create' class="btn btn-primary btn-lg">メンバー登録</a>
<br>
<br>
 <form method="post" name="form1" action="/performanceEntry">
   <input type="hidden" name="user_id" value={{$userID}}>
   <a class="btn btn-primary btn-lg" href="javascript:form1.submit()">公演登録</a>
 </form>

 <a href='/performanceList' class="btn btn-primary btn-lg">公演リスト</a>
@stop
