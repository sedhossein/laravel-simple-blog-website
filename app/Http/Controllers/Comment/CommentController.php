<?php

namespace App\Http\Controllers\Comment;

use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function create(Request $request,$post_id)
    {
//        dd($request->all());
        //validate

        $comment = new Comment();
        $comment->user_id = auth()->id();
        $comment->post_id = $post_id;
        $comment->body = $request->body;

        $comment->save();

        return redirect()->back()->with('status', 'New Comment saved  successfully! ');

    }
}
