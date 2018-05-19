<?php
namespace App\Http\Controllers\Blog;
use App\Comment;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        $posts = Post::paginate(10);

//      ===================== way 1 to pass the parameters to .blade (view) =====================

//        return view('blog.index',[
//            'posts' => $posts
//        ]);


//      ===================== way 2 to pass the parameters to .blade (view) =====================

        return view('blog.index',compact('posts'));

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
        $post->user_id = \Auth::id();
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

    public function update(Request $request,Post $post)
    {

//        =====================      way one / with passing the id of product =====================

//        $post = Post::where('id',$id)->update([
//            'user_id' => 6,
//            'title' => $request->title,
//            'body' => $request->body
//        ]);


//      =====================      way two / with route model binding =====================
        $post->user_id = 6;
        $post->title = $request->title;
        $post->body = $request->body;

        $post->update();

        return redirect()->back()->with('status', 'the post changed  successfully! ');
    }

    public function destroy($id)
    {
        Post::findOrFail($id)->delete();
        return 'yo';
//        return redirect()->back()->with('status', 'the post changed  successfully! ');
    }


    public function show($id) //single post show
    {

        $post = Post::where('id',$id)->get();


        if ( !$post->count() )
        {
            //return target view
            return 'whooops! this request is invalid ...';
        }

        $post = $post[0]; //dirty code

        //if we want to use the owner of comment,
        //we could user lazy load in view(show.blade)
        $comments = Comment::select([
            'user_id','body','created_at'
        ])->where('post_id',$id)->get();

        //for eager loading is better to use
        // Comment::with('user')->where('user_id',$id)->get();
//        dd($comments);


        return view('blog.show',compact([
            'post',
            'comments'
        ]));
    }

}
