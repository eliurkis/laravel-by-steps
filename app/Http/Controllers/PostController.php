<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('post.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::find($id);

        return view('post.show', compact('post'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $post = Post::create([
            'title'  => $request->get('title'),
            'body'   => $request->get('body'),
            'author' => $request->get('author'),
        ]);

        return redirect('/posts');
    }
}
