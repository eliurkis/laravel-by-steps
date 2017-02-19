@extends('layouts.front')

@section('content')

    @foreach ($posts as $post)
        <div class="blog-post">
            <h2 class="blog-post-title">{{ $post->title }}</h2>
            <p class="blog-post-meta">February 19, 2017 by <a href="#">{{ $post->author }}</a></p>
            <div class="blog-post-body">
                {{ $post->body }}
            </div>
        </div><!-- /.blog-post -->
    @endforeach

@endsection
