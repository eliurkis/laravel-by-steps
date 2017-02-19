@extends('layouts.admin')

@section('content')

    @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif

    <h1 class="page-header">Listado de Posts</h1>

    <table class="table table-hover">
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Actions</th>
        </tr>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->author }}</td>
                <td>
                    <a class="btn btn-default btn-sm" href="{{ route('admin.posts.show', [$post->id]) }}">Detalles</a>
                    <a class="btn btn-primary btn-sm" href="{{ route('admin.posts.edit', [$post->id]) }}">Editar</a>
                    <a class="btn btn-danger btn-sm" href="{{ route('admin.posts.delete', [$post->id]) }}" onclick="return confirm('Esta seguro?')">Eliminar</a>
                </td>
            </tr>
        @endforeach
    </table>

    <p>
        <a class="btn btn-default" href="{{ route('admin.posts.create') }}" role="button">Add a New Post</a>
    </p>

@endsection
