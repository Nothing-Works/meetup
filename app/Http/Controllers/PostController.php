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
        $items = Post::all();

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
        dd(auth()->user()->can('delete', $post));
    }
}
