<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get()->paginate();

        return view('index',[
            'posts' => $posts
        ]);

//        return view('index',compact('posts'));
    }

    public function create()
    {

    }


}
