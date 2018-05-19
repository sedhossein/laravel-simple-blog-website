@extends('layouts.master')

@section('title')
    post
@endsection

@section('content')

    <main role="main">
        <div class="jumbotron">
            <div class="col-sm-10">
                <b>
                    {{ $post->title }}
                </b>

                <p>
                    {{ $post->body }}
                </p>
                <hr>
                {{--                    {{ dd( $post->tags ) }}--}}
                <div>
                    @foreach( $post->tags as $tag)
                        <a type="button" class="btn btn-outline-secondary" href="{{ route('tag.show',$tag->id) }}">
                            {{ $tag->name }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <hr>
        <div class="jumbotron col-sm-8">

            @if( session('status') )
                <div class="alert alert-success col-sm-7">
                    {{ session('status') }}
                </div>
            @endif
            {{--{{ dd($comments) }}--}}
            @foreach( $comments as $comment)
                <div class="col-sm-8">
                    <b>
                        {{ $comment->user->name }}
                    </b><br>
                    {{ $comment->body }}
                </div>
                <hr>
                <hr>
            @endforeach

            <form action="{{ route('comment.create',$post->id) }}" method="post">
                {{ csrf_field() }}
                <div class="col-sm-8">
                    <div class="form-group">
                        <label for="comment">Comment</label>
                        <textarea name="body" class="form-control" id="comment" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Send</button>
                </div>
            </form>
        </div>
    </main>
    <hr><br>

@endsection

@section('scripts')

    <script src="path/to/select2.min.js"></script>

@endsection