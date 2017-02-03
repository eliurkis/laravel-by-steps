@extends('layouts.app')

@section('content')

    @if (session('message'))
        <p>{{ session('message') }}</p>
    @endif

    <table border="1" cellpadding="5px">
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
                    <a href="{{ url('/posts/show/' . $post->id) }}">Detalles</a>
                    <a href="{{ url('/posts/edit/' . $post->id) }}">Editar</a>
                    <a href="{{ url('/posts/delete/' . $post->id) }}" onclick="return confirm('Esta seguro?')">Eliminar</a>
                </td>
            </tr>
        @endforeach
    </table>

    <p>
        <a href="{{ url('/posts/create') }}">Add a New Post</a>
    </p>

@endsection
