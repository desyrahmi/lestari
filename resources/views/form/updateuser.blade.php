@extends('base.base')

@section('title','Update User')

@section('content')
    <form action="{{route('user.edit')}}" method="post">
        {{csrf_field()}}
        <input type="text" name="id" value="{{ $user->id }}" hidden>
        <input type="text" name="name" value="{{ $user->name }}">
        <input type="text" name="phone" value="{{ $user->phone }}">
        <input type="text" name="address" value="{{ $user->address }}">
        <input type="text" name="email" value="{{ $user->email }}">
        <input type="password" name="password" value="{{ $user->password }}">
        <select name="role_id">
            <option value="1"
                    @if($user->role->id==1)
                    selected
                    @endif
            >Administrator
            </option>
            <option value="2"
                    @if($user->role->id==2)
                    selected
                    @endif
            >User
            </option>
        </select>
        <button type="submit" name="action">UPDATE</button>
    </form>
@endsection