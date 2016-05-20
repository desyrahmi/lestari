@extends('base.base')

@section('title', 'Donate')

@section('content')
    <ul>
        @foreach($donates as $donate)
            <li>
                {{$donate->user_id}}
                <br>
                {{$donate->comment}}
                <a href="{{route('donate.delete', ['id' => $donate->id])}}">Delete</a>
            </li>
        @endforeach
    </ul>
@endsection