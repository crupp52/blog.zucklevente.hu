<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at')->limit(5)->get();

        return view('welcome', [
            'posts' => $posts,
        ]);
    }
}
