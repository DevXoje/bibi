@extends('template')
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
                <figure class="book jumbotron">
                    <figcaption>
                        <h3 class="book__title">{{ $book->title}}</h3>
                        <h4 class="book__subtitle">{{ $book->subtitle}}</h4>
                    </figcaption>

                    <a href="{{ route("book_download",$book) }}" class="book__content">
                        <img src="{{ Vite::asset($book->image) }}"
                             alt="algo">

                    </a>
                </figure>
            @endforeach
        @else
            <p>
                No Hay book disponibles
            </p>
        @endif
        @include("partials.call_to_action__share")
    </div>
@endsection
