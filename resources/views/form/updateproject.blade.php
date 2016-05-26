@extends('base.base')

@section('title','Update Project')

@section('content')
    <form action="{{route('project.edit')}}" method="post">
        {{csrf_field()}}
        <input type="text" name="id" value="{{ $project->id }}" hidden>
        <input type="text" name="title" value="{{ $project->title }}">
        <input type="text" name="description" value="{{ $project->description }}">
        <input type="text" name="total" value="{{ $project->total }}">
        <button type="submit" name="action">UPDATE</button>
    </form>
@endsection