@extends('base.base')

@section('title', 'Article')

@section('content')
    <ul>
        @foreach($articles as $article)
            <li>
                {{$article->title}}
                <a href="{{route('article.delete', ['id' => $article->id])}}">Delete</a>
            </li>
        @endforeach
    </ul>
@endsection