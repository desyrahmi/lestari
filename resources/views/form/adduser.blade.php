@extends('base.base')

@section('title','Add User')

@section('content')
<form action="{{route('user.add.create')}}" method="post">
	{{csrf_field()}}
	<input type="text" name="name" placeholder="Name">
	<input type="text" name="phone" placeholder="Phone">
	<input type="text" name="address" placeholder="Address">
	<input type="text" name="email" placeholder="Email">
	<input type="password" name="password" placeholder="Password">
	<select name="role_id">
		<option value="1">Administrator</option>
		<option value="2">User</option>
	</select>
	<button type="submit" name="action">ADD</button>
</form>
@endsection