@extends('base.base')

@section('title','Login Page')

@section('content')
<form action="{{route('auth.doLogin')}}" method="post">
	{{csrf_field()}}
	<input type="text" name="email">
	<input type="password" name="password">
	<button type="submit" name="action">LOGIN</button>
</form>
@endsection