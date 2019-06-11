<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function posts(Request $request, $slug)
    {
        $tag = Tag::whereSlug($slug)->first();

        $posts = $tag->posts()->simplePaginate(20);

        return view('posts.index', compact('posts'));
    }
}
