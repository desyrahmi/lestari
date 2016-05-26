@extends('base.base')

@section('title', 'List Foto')

@section('content')
    <ul>
        @foreach($photos as $photo)
            <li>
                {{$photo->name}}
                <img src="{{ route('photo.get', ['fileName' => $photo->id.".".$photo->extension]) }}" alt="">
                <a href="{{route('photo.delete', ['id' => $photo->id])}}">Delete</a>
            </li>
        @endforeach
    </ul>
@endsection