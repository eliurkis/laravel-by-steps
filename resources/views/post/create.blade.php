@extends('layouts.app')

@section('content')

    <form action="" method="post">
        {{ csrf_field() }}
        <p>
            <label>Title</label>
            <input name="title">
        </p>
        <p>
            <label>Body</label>
            <textarea name="body"></textarea>
        </p>
        <p>
            <label>Author</label>
            <input name="author">
        </p>
        <p>
            <button type="submit">Save Post</button>
            <a href="{{ url('/posts') }}">Cancel</a>
        </p>

    </form>

@endsection
