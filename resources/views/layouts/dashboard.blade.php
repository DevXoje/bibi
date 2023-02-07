<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title> @yield('title') </title>
    <link rel="icon" type="image/x-icon" href="{{ Vite::asset('resources/images/logo_w50.webp') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
{{-- @section('nav', ['Home' => route('home'), 'List of posts' => route('posts_list')]) --}}

@include('partials.nav')
<div class="container">
    @yield('content')
</div>

</body>

</html>
