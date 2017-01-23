@extends('layouts.app')

@section('content')

    @foreach ($posts as $post)
        <p>
            <a href="{{ url('/posts/show/' . $post->id) }}">{{ $post->title }}</a>
        </p>
    @endforeach

    <p>
        <a href="{{ url('/posts/create') }}">Add a New Post</a>
    </p>

@endsection
