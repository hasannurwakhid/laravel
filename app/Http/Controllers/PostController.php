<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts', [
            "title" => "Blog",
            'active' => "blog",
            "posts" => Post::all()
        ]);
    }
    public function show($slug){
        return view('post', [
            "title" => "Single Post",
            'active' => "blog",
            "post" => Post::find($slug)
        ]);
    }
}
