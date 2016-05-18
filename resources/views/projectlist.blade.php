@extends('base.base')

@section('title', 'Daftar')

@section('content')
    <ul>
        @foreach($projects as $project)
            <li>
                {{$project->title}}
                <a href="{{route('project.delete', ['id' => $project->id])}}">Delete</a>
            </li>
        @endforeach
    </ul>
@endsection