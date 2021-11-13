<?php

namespace App\Controllers;

use App\Helpers\Auth;
use App\Models\Post;
use Core\Controller;
use Core\File;
use Core\Request;

class BlogController extends Controller
{
    public function create()
    {
        return view('blog/create');
    }

    public function store()
    {
        $req = new Request;
        $img = File::save($_FILES['image'], 'posts');
        Post::create([
            'author_id' => Auth::user()->id,
            'title' => $req->title,
            'desc' => $req->desc,
            'img' => $img,
        ]);
        return redirect('');
    }

    public function show($q)
    {
        $blog = Post::find($q->id);
        return view('blog/show', [
            'blog' => $blog,
        ]);
    }
}