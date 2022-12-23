@extends('layouts/template')
@section('title', 'Blog')

@section('content')
    <article class="blog">
        <header>
            <h1>Blog</h1>
        </header>
        @if (isset($posts))
            <div class="gallery">
                @foreach ($posts as $post)
                    @include("posts.item",$post)
                @endforeach
            </div>
        @else
            <p>
                No Hay post disponibles
            </p>
        @endif
        <footer class="call_to_action__blog">
            <hr>

            <h3>Sigue mi blog</h3>
            <p>Recibe nuevo contenido directamente en tu bandeja de entrada.</p>{{--Repetido en home--}}
            <form>
                <label for="mail_newsletter"></label>
                <input name="mail_newsletter" id="mail_newsletter"
                       placeholder="Introduce tu dirección de correo electrónico">
                <button type="submit" class="btn">
                    Suscríbete
                </button>
            </form>

        </footer>
    </article>

@endsection
