@extends('base.base')

@section('title','Donate Page')

@section('content')
    <form action="{{route('donate.add.create')}}" method="post">
        {{csrf_field()}}
        <input type="text" name="donate">
        <select name="project_id">
            @foreach($projects as $project)
                <option value="{{ $project->id }}">{{$project->title}}</option>
            @endforeach
        </select>
        <button type="submit" name="action">POST</button>
    </form>
@endsection