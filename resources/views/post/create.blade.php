@extends('layouts.admin')

@section('content')

    <h1 class="page-header">Agregar un Post</h1>

    <form action="" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="inputName">Title</label>
            <input type="text" name="title" class="form-control" id="inputName" placeholder="Name">
        </div>

        <div class="form-group">
            <label for="inputBody">Body</label>
            <textarea name="body" class="form-control" id="inputBody" placeholder="Body"></textarea>
        </div>

        <div class="form-group">
            <label for="inputAuthor">Author</label>
            <input type="text" name="author" class="form-control" id="inputAuthor" placeholder="Author">
        </div>

        <button type="submit" class="btn btn-primary">Save Post</button>
        <a class="btn btn-default" href="{{ route('admin.posts.index') }}">Cancel</a>
    </form>

@endsection
