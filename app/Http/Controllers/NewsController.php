<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Post;
use App\Models\Videos;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $pegawais = Pegawai::all();
        $videos = Videos::all();
        return view('companymain', compact('posts','pegawais','videos'));
    }

    // In your PostController.php
        public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('index', compact('post'));
    }

}
