@extends('layouts/template')
@section('title', 'Pictures')

@section('content')
    <header>
        <h1>Pictures</h1>
    </header>
    @if (isset($pictures))
        <div class="gallery_pictures">
            @foreach ($pictures as $picture)
                @include("pictures.item",$picture)
            @endforeach
        </div>
    @else
        <p>
            No Hay book disponibles
        </p>
    @endif
    @include("partials.call_to_action__share")
@endsection
