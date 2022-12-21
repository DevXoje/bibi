@extends('template')
@section('title', 'Blog')

@section('content')

    @if (isset($posts))
        <div class="gallery">
            <header>
                <h1>Blog</h1>
            </header>
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

        <h2>Sigue mi blog</h2>
        <p>Recibe nuevo contenido directamente en tu bandeja de entrada.</p>{{--Repetido en home--}}
        <form>
            <label for="mail_newsletter">algo</label>
            <input name="mail_newsletter" id="mail_newsletter" placeholder="algo">
            <button type="submit"> subscribre</button>
        </form>

    </footer>

@endsection
