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
{{$book->link}}
