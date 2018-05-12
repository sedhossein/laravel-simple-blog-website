<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function show($id)
    {

        $tag = Tag::find(1)->posts()->where('id',$id)->get();

        dd( $tag );


    }
}
