@extends('template')
@section('title', 'Pictures')

@section('content')
    <h1>Pictures</h1>
    @if (isset($pictures))
        <div class="gallery_pictures">
            @foreach ($pictures as $picture)
                <figure class="jumbotron">
                    <hr>
                    <figcaption>
                        <h2>{{$picture["title"]}}</h2>
                    </figcaption>
                    <hr>
                    <img src="{{Vite::asset($picture["path"])}}" alt="algo">

                </figure>
            @endforeach
        </div>
    @else
        <p>
            No Hay book disponibles
        </p>
    @endif
    <hr>

@endsection
