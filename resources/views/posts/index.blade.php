@extends('template')
@section('title', 'Blog')

@section('content')
    <h1>Blog</h1>
    @if (isset($posts))
        <div class="gallery">
            @foreach ($posts as $post)
                <article class="gallery__item">
                    <a href="{{route("posts.show",$post)}}">{{--<a href="/posts/{{ $post->id }}">--}}
                        {{--<figure>
                            <img src="{{ Vite::asset('resources/images/welcome.webp') }}" alt="algo">
                        </figure>--}}
                        <img src="https://via.placeholder.com/150" alt="algo">
                        <h2>{{ $post["title"]}}</h2>
                        <p>{{ Str::limit($post["content"])}}</p>
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
    <hr>
    <div id="other_call_to_action">
        <h2>Sigue mi blog</h2>
        <p>Recibe nuevo contenido directamente en tu bandeja de entrada.</p>{{--Repetido en home--}}
        <form>
            <label for="mail_newsletter">algo</label>
            <input name="mail_newsletter" id="mail_newsletter" placeholder="algo">
            <button type="submit"> subscribre</button>
        </form>

    </div>

@endsection
