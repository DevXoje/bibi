<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title> @yield('title') </title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
{{-- @section('nav', ['Home' => route('home'), 'List of posts' => route('posts_list')]) --}}
<div class="jumbotron">
    <a>
        <img src="{{asset('/img/jumbo_image.webp')}}">
    </a>
</div>
@include('partials.nav')
<div class="container">
    @yield('content')
</div>

</body>

</html>
