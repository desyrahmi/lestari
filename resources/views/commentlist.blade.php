@extends('base.base')

@section('title', 'Comment')

@section('content')
    <ul>
        @foreach($comments as $comment)
            <li>
                {{$comment->comment}}
                <a href="{{route('comment.delete', ['id' => $comment->id])}}">Delete</a>
            </li>
        @endforeach
    </ul>
@endsection