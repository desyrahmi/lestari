@extends('base.base')

@section('title', 'List Foto')

@section('content')
    <ul>
        @foreach($photos as $photo)
            <li>
                {{$photo->title}}
                <a href="{{route('photo.delete', ['id' => $photo->id])}}">Delete</a>
            </li>
        @endforeach
    </ul>
@endsection