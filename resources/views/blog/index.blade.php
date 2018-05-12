@extends('layouts.master')

@section('title')
    Blog
@endsection

@section('content')
    {{ $posts->links() }}
    @foreach( $posts as $post)


        <main role="main">
            <div class="jumbotron">
                <div class="col-sm-8 mx-auto">
                    <b>
                        {{ $post->title }}
                    </b>

                    <p>
                        {{ str_limit($post->body,150 )}}
                    </p>
                    <hr>
{{--                    {{ dd( $post->tags ) }}--}}
                        <div>
                            @foreach( $post->tags as $tag)
                                <button type="button" class="btn btn-outline-secondary">
                                    {{ $tag->name }}
                                </button>
                            @endforeach
                        </div>
                    <hr>
                    <p>
                        <a class="btn btn-primary" href="#" role="button">
                            Read more
                        </a>
                    </p>
                </div>
            </div>
        </main>
        <hr><br>
    @endforeach
    {{ $posts->links() }}
@endsection