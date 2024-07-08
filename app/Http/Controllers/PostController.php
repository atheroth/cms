<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('is_published', 1)->get();

        foreach ($posts as $post) {
            dump($post->title);
        }
    }

    public function create()
    {
        //реализация добавления поста
    }


    public function update()
    {
        $post = Post::find(1);
        //реализация апдейта
    }

    public function delete()
    {
        $post = Post::find(1);
        $post->delete();
        dd($post);
    }
}
