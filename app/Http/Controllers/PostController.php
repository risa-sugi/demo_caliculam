<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function show(Post $post)
    {
    }
    public function show(Post $post)
    {
        return view('posts/show')->with(['posts' => $post]);
    }
    public function create()
    {
        return view('posts/create');
    }
    public function store(PostRequest $request, Post $post)
    {
        $input = $request['post'];
        $post->create($input);
        return redirect('/posts/' . $post->id);
    }
    
}
