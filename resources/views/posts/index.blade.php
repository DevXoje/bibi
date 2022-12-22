@extends('template')
@section('title', 'Blog')

@section('content')
    <div class="blog">
        <header>
            <h1>Blog</h1>
        </header>
        @if (isset($posts))
            <div class="gallery">

                @foreach ($posts as $post)
                    <article class="gallery__item">
                        {{--<a href="">--}}
                        <a href="{{route("posts.show",$post)}}" class="gallery__item_content">
                            <figure>
                                <img src="{{ Vite::asset($post->image) }}" alt="algo">
                            </figure>
                            <h2>{{ $post->title}}</h2>
                            <p>{{ Str::limit($post->content)}}</p>
                        </a>
                    </article>
                    {{-- {{ $posts->links() }} --}}
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
    </div>

@endsection
