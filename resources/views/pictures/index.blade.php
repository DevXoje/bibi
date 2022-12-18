@extends('template')
@section('title', 'Pictures')

@section('content')
    <h1>Pictures</h1>
    @if (isset($pictures))
        @foreach ($pictures as $picture)
            <hr>
            <h2>{{$picture["title"]}}</h2>
            <hr>
            <img src="{{$picture["path"]}}" alt="algo">
        @endforeach
    @else
        <p>
            No Hay book disponibles
        </p>
    @endif
    <hr>

@endsection
