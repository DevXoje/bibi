@extends('template')
@section('title', 'Post details')

@section('content')
    @isset($post)
        @php
            $paragraphs=preg_split("/\r\n|\n|\r/",$post->content);

        @endphp

        <article class="post">
            <header class="post__header">
                <figure>
                    <img src="{{ Vite::asset($post->image) }}" alt="algo">
                </figure>
                <h1 class="post__title">{{ $post->title }}</h1>
            </header>
            <div class="post__content">
                @foreach($paragraphs as $paragraph)
                    <p>{{$paragraph}}</p>
                @endforeach
            </div>
            <footer>
                <small>{{ $post->created_at->diffForHumans() }}</small>
            </footer>
        </article>
        {{-- @if (auth()->check() && auth()->user()->id == $post->user_id)//|| auth()->user()->role==admin)
            <form action="{{ route('posts.destroy', $post) }}" method="POST">@csrf @method('DELETE')
                <button type="submit">Borrar</button>
            </form>
            <form action="{{ route('posts.edit', $post) }}" method="GET">@csrf
                <button type="submit">Editar</button>
            </form>
        @endif --}}
        {{--   @isset(auth()->user()->role)
              @if ((auth()->check() && auth()->user()->id == $post->user_id) || auth()->user()->role == 'admin')
                  <form action="{{ route('posts.destroy', $post) }}" method="POST">@csrf @method('DELETE')
                      <button type="submit">Borrar</button>
                  </form>
                  <form action="{{ route('posts.edit', $post) }}" method="GET">@csrf
                      <button type="submit">Editar</button>
                  </form>
              @endif
          @endisset --}}

        {{-- {!! Html::linkRoute('admin.flags.destroy', 'Delete', $post['id']) !!} --}}
    @else
        Error
    @endisset
@endsection
