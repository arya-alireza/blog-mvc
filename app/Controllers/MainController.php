<?php

namespace App\Controllers;

use Core\Controller;

use App\Models\Post;

class MainController extends Controller
{
    public function home()
    {
        $posts = Post::all();
        return view('home', [
            'posts' => $posts,
        ]);
    }
}