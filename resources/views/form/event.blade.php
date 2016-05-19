@extends('base.base')

@section('title','Event Page')

@section('content')
    <form action="{{route('event.add.create')}}" method="post">
        {{csrf_field()}}
        <input type="text" name="title">
        <input type="date" name="date">
        <input type="text" name="description">
        <button type="submit" name="action">POST</button>
    </form>
@endsection