<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::simplePaginate(20);

        return view('posts.index', compact('posts'));
    }

    public function show(Request $request, $slug)
    {
        $post = Post::whereSlug($slug)->first();

        return view('posts.show', compact('post'));
    }
}
