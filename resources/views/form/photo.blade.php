@extends('base.base')

@section('title','Add Photo')

@section('content')
    <form action="{{route('photo.add.create')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="text" name="name">
        <input type="file" name="photo">
        <button type="submit" name="action">ADD</button>
    </form>
@endsection