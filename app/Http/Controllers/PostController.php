<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('post.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('post.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'img' => 'string',
            'content' => 'string',
            'likes' => 'integer',
        ]);
        Post::create($data);
        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
        return view('post.show', ['post' => $post]);
    }

    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'img' => 'string',
            'content' => 'string',
            'likes' => 'integer',
        ]);
        $post->update($data);
        return redirect()->route('post.show', $post->id);

    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');


    }

}
