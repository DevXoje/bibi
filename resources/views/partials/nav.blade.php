<nav class="navbar">
    {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
         aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
     </button>--}}

    <ul class="navbar_nav">
        <li class="nav-item"><a class="nav_link" href="{{ route('home') }}">Home</a></li>
        <li class="nav-item"><a class="nav_link" href="{{ route('posts.index') }}">Blog</a></li>
        <li class="nav-item"><a class="nav_link" href="{{ route('books.index') }}">Recursos</a></li>
        <li class="nav-item"><a class="nav_link" href="{{ route('pictures.index') }}">Galeria</a></li>
        <li class="nav-item"><a class="nav_link" href="{{ route('about') }}">Sobre mi</a></li>
        <li class="nav-item"><a class="nav_link" href="{{ route('contact') }}">Contacto</a></li>
        {{--@if (auth()->check())
            <li class="nav-item"><a class="nav-link" href="/posts/crear">Creator</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="/logout">Logout
                    ({{ auth()->user()->login }})</a></li>
        @else
            <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
        @endif--}}

        {{-- @foreach ($links as $link => $name)
        <li class="nav-item"><a class="nav-link" href="/" {{ $link }}>{{ $name }}</a></li>
    @endforeach --}}
    </ul>
    {{--<p>Date: {{ getFecha('d/m/y') }}</p>--}}

</nav>
