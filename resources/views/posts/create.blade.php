@extends('template')
@section('title', 'New Post')

@section('content')

    <div class="container">
        @include('partials.validation-errors')
        <h1>Post Creator</h1>
        <form action="{{ route('posts.store') }}" method="post" class="row g-3 needs-validation">
            @include('posts._form', ['buttonText' => 'Create Post','users' => $users])
        </form>
    </div>

@endsection
