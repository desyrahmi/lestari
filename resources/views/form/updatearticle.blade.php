@extends('base.base')

@section('title','Update Article')

@section('content')
    <form action="{{route('article.edit')}}" method="post">
        {{csrf_field()}}
        <input type="text" name="id" value="{{ $article->id }}" hidden>
        <input type="text" name="title" value="{{ $article->title }}">
        <input type="text" name="post" value="{{ $article->post }}">
        <button type="submit" name="action">UPDATE</button>
    </form>
@endsection