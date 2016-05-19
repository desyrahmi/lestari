@extends('base.base')

@section('title','Comment Page')

@section('content')
    <form action="{{route('comment.add.create')}}" method="post">
        {{csrf_field()}}
        <input type="text" name="comment">
        <select name="article_id">
            @foreach($articles as $article)
                <option value="{{ $article->id }}">{{$article->title}}</option>
            @endforeach
        </select>
        <button type="submit" name="action">POST</button>
    </form>
@endsection