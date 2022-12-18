@extends('template')
@section('title', 'New user')

@section('content')

    <div class="container">
        <h1>Post Editor</h1>
        <form action="{{ route('posts.update', $post) }}" method="post" class="row g-3 needs-validation">
            @method('PATCH')

            @include('posts._form', ['buttonText' => 'Edit Post','users' => $users])
        </form>
    </div>

@endsection
