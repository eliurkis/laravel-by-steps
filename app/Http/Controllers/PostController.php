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
        Post::create([
            'title'  => $request->get('title'),
            'body'   => $request->get('body'),
            'author' => $request->get('author'),
        ]);

        return redirect('/posts')->with('message', 'The post has been created!');
    }

    public function edit($id)
    {
        $post = Post::find($id);

        return view('post.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        // Option #1
//        $post = Post::find($id);
//        $post->update([
//            'title'  => $request->get('title'),
//            'body'   => $request->get('body'),
//            'author' => $request->get('author'),
//        ]);

        // Option #2
        Post::where('id', $id)
            ->update([
                'title'  => $request->get('title'),
                'body'   => $request->get('body'),
                'author' => $request->get('author'),
            ]);

        return redirect('/posts')->with('message', 'The post has been updated!');
    }

    public function destroy($id)
    {
        Post::destroy($id);

        return redirect('/posts')->with('message', 'The post has been deleted!');
    }
}
