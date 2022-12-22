@extends('template')
@section('title', 'Pictures')

@section('content')
    <header>
        <h1>Pictures</h1>
    </header>
    @if (isset($pictures))
        <div class="gallery_pictures">
            @foreach ($pictures as $picture)
                <figure class="jumbotron">
                    <figcaption>
                        <h2 class="title hr_decoration">{{$picture->title}}</h2>
                    </figcaption>
                    <img src="{{Vite::asset($picture->path)}}" alt="algo">

                </figure>
            @endforeach
        </div>
    @else
        <p>
            No Hay book disponibles
        </p>
    @endif
    @include("partials.call_to_action__share")
@endsection
