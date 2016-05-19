@extends('base.base')

@section('title', 'Event')

@section('content')
    <ul>
        @foreach($events as $event)
            <li>
                {{$event->title}}
                <a href="{{route('event.delete', ['id' => $event->id])}}">Delete</a>
            </li>
        @endforeach
    </ul>
@endsection