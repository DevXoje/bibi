@extends('layouts/template')
@section('title', 'Books')

@section('content')
    <div class="gallery_books">
        <header>
            <figure class="jumbotron free_resources">
                <img src="{{Vite::asset("resources/images/recursos_gratuitos.webp")}}" alt="algo">
            </figure>
            <h1>Books</h1>
            <h2>DE LA TEORÍA A LA PRÁCTICA</h2>
        </header>
        @if (isset($books))
            @foreach ($books as $book)
                @include("books.item",$book)
            @endforeach
        @else
            <p>
                No Hay book disponibles
            </p>
        @endif
        @include("partials.call_to_action__share")
    </div>
@endsection
