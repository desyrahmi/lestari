@extends('base.base')

@section('title','Article Page')

@section('content')
    <form action="{{route('article.add.create')}}" method="post">
        {{csrf_field()}}
        <input type="text" name="title">
        <input type="text" name="content">
        <button type="submit" name="action">POST</button>
    </form>
@endsection