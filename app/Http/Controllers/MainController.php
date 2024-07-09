<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class MainController extends Controller
{
    public function index()
    {
        $posts = Post::where('is_published', 1)->get();
        return view(
            'layouts.main',
            ['posts' => $posts]
        );
    }
}
