@extends('template')
@section('title', 'Books')

@section('content')
    <header>
        <figure class="jumbotron free_resources">
            <img src="{{Vite::asset("resources/images/recursos_gratuitos.webp")}}" alt="algo">
        </figure>
        <h1>Books</h1>
        <h2>DE LA TEORÍA A LA PRÁCTICA</h2>
    </header>
    @if (isset($books))
        @foreach ($books as $book)
            {{--<div class="book">
                <h3 class="book__title">{{ $book->title}}</h3>
                <h4 class="book__subtitle">{{ $book->subtitle}}</h4>
                <p class="book__content">
                    <a href="{{ $book->link }}">
                        Todo tuyo
                    </a>
                </p>
            </div>--}}
            <figure class="book jumbotron">
                <figcaption>
                    <h3 class="book__title">{{ $book->title}}</h3>
                    <h4 class="book__subtitle">{{ $book->subtitle}}</h4>
                </figcaption>

                <a href="{{ route("book_download",$book) }}" class="book__content">
                    <img src="{{ Vite::asset($book->image) }}"
                         alt="algo">

                </a>
                {{--<a href="{{ $book->link }}" class="book__content">
                    <img src="{{ Vite::asset('resources/images/Libros/Alimentacion_Consciente_thumbnail.PNG') }}"
                         alt="algo">

                </a>--}}
            </figure>
        @endforeach
    @else
        <p>
            No Hay book disponibles
        </p>
    @endif
    <hr>
    <footer>
        Call to action compartir
        <ul>
            <li>
                <button>
                    facebook
                </button>
            </li>
            <li>
                <button>
                    whatsapp
                </button>
            </li>
            <li>
                <button>
                    whatsapp
                </button>
            </li>
        </ul>
        <button>
            megusta
        </button>
    </footer>
@endsection
