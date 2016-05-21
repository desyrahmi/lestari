@extends('base.base')

@section('title', 'Donate')

@section('content')
    <ul>
        @foreach($donates as $donate)
            <li>
                {{$donate->project_id}}
                <br>
                {{$donate->donate}}
                <a href="{{route('donate.delete', ['id' => $donate->id])}}">Delete</a>
            </li>
        @endforeach
    </ul>
@endsection