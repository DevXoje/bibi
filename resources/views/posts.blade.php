@extends('template')
@section('title', 'Productos')

@section('content')
    @isset($id)
        File of post {{ $id }}
    @else
        List of posts
    @endisset
@endsection
