<?php

namespace App\Http\Controllers\Tag;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    public function show($id)
    {
        $tag = Tag::with('posts')->where('id',$id)->get()->toArray();
//        dd($tag);
        $tag = $tag[0];

        return view('tag.show', compact(
            'tag'
        ));
    }


}
