@extends('base.base')

@section('title','Add Project')

@section('content')
<form action="{{route('project.add.create')}}" method="post">
    {{csrf_field()}}
    <input type="text" name="title" placeholder="Judul">
    <input type="text" name="description" placeholder="Deskripsi Project">
    <input type="text" name="total" placeholder="Total Donasi Yang Dibutuhkan">
    <button type="submit" name="action">ADD</button>
</form>
@endsection