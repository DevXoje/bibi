@extends('template')
@section('title', 'Blog')

@section('content')
    <h1>Blog</h1>
    <h2>DE LA TEORÍA A LA PRÁCTICA</h2>
    @if (isset($books))
        @foreach ($books as $book)
            <h3>{{ $book["title"]}}</h3>
            <h4>{{ $book["subtitle"]}}</h4>
            <p>
                <a href="{{ $book["link"] }}">Todo tuyo</a>
            </p>

        @endforeach
    @else
        <p>
            No Hay book disponibles
        </p>
    @endif
    <hr>

@endsection
