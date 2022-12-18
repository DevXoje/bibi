@extends('template')
@section('title', 'Post details')

@section('content')
    @isset($post)
        <img src="https://via.placeholder.com/150" alt="algo">
        <h1>Details for the post {{ $post->id }}</h1>
        <h2>{{ $post["title"]}}</h2>
        <p>{{ $post["content"]}}</p>
        <small>{{ $post->created_at->diffForHumans() }}</small>
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
