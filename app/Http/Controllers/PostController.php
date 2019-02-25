<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Support\Facades\View;

class PostController extends Controller
{
    /**
     * ThreadController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Post::latest()->get();

        return View::component('PostsView', compact('items'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Post $post
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return View::component('ShowPost', compact('post'));
    }

    public function create()
    {
        return View::component('PostCreate');
    }

    public function store()
    {
        $attributes = request()->validate([
            'body' => ['required', 'min:3'],
            'title' => ['required', 'min:3'],
        ]);

        Post::create($attributes + ['user_id' => auth()->id()]);
    }

    public function destroy(Post $post)
    {
        $post->delete();
    }
}
