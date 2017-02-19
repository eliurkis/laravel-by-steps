@extends('layouts.admin')

@section('content')

    <h1 class="page-header">Editar Post</h1>

    <form action="" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="inputName">Title</label>
            <input type="text" name="title" value="{{ $post->title }}" class="form-control" id="inputName" placeholder="Name">
        </div>

        <div class="form-group">
            <label for="inputBody">Body</label>
            <textarea name="body" class="form-control" id="inputBody" placeholder="Body">{{ $post->body }}</textarea>
        </div>

        <div class="form-group">
            <label for="inputAuthor">Author</label>
            <input type="text" name="author" value="{{ $post->author }}" class="form-control" id="inputAuthor" placeholder="Author">
        </div>

        <button type="submit" class="btn btn-primary">Edit Post</button>
        <a class="btn btn-default" href="{{ route('admin.posts.index') }}">Cancel</a>
    </form>

@endsection
