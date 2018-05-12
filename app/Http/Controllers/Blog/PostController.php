<?php
namespace App\Http\Controllers\Blog;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        $posts = Post::paginate(10);

//        return view('blog.index',[
//            'posts' => $posts
//        ]);

        return view('blog.index',compact('posts'));

//        return view('index',[
//            'posts' => $posts
//        ]);

//        return view('index',compact('posts'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:50',
            'body' => 'required',
        ], [
            'title.required' => 'title is required  !',
            'body.required' => 'body is required.',
        ]);

        $post = new Post();
        $post->user_id = 1;
        $post->title = $request->title;
        $post->body = $request->body;

        $post->save();

        return redirect()->back()->with('status', 'New post saved  successfully! ');

    }

    public function edit($id)
    {
        $post = Post::where('id',$id)->get();

        return view('blog.edit',compact('post'));
    }

    public function update(Request $request,Post $post)//$id
    {

//        $post = Post::where('id',$id)->update([
//            'user_id' => 6,
//            'title' => $request->title,
//            'body' => $request->body
//        ]);

        $post->user_id = 6;
        $post->title = $request->title;
        $post->body = $request->body;

        $post->update();

        return redirect()->back()->with('status', 'the post changed  successfully! ');
    }

    public function destroy($id)
    {
        Post::where('id',$id)->delete();
        return 'yo';
//        return redirect()->back()->with('status', 'the post changed  successfully! ');
    }


}
