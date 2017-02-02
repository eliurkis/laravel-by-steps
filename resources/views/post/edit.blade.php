@extends('layouts.app')

@section('content')

    <form action="" method="post">
        {{ csrf_field() }}
        <p>
            <label>Title</label>
            <input name="title" value="{{ $post->title }}">
        </p>
        <p>
            <label>Body</label>
            <textarea name="body">{{ $post->body }}</textarea>
        </p>
        <p>
            <label>Author</label>
            <input name="author" value="{{ $post->author }}">
        </p>
        <p>
            <button type="submit">Edit Post</button>
            <a href="{{ url('/posts') }}">Cancel</a>
        </p>

    </form>

@endsection
