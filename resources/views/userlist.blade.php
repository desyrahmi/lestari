@extends('base.base')

@section('title', 'Daftar')

@section('content')
<ul>
	@foreach($users as $user)
	<li>
		{{$user->name}}
		<a href="{{route('user.delete', ['id' => $user->id])}}">Delete</a>
	</li>
	@endforeach
</ul>
@endsection