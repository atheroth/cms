<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('is_published', 1)->get();
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        // Your create logic
    }

    public function update()
    {
        // Your update logic
    }

    public function delete()
    {
        // Your delete logic
    }
}
