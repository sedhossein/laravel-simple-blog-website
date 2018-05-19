@extends('layouts.master')

@section('title')
    tag show ...
@endsection

@section('content')
{{--{{ dd($tag) }}--}}
    @foreach( $tag['posts'] as $post)
        <main role="main">
            <div class="jumbotron">
                <div class="col-sm-8 mx-auto">
                    <b>
                        {{ $post['title'] }}
                    </b>

                    <p>
                        {{ str_limit($post['body'],150 )}}
                    </p>
                    <hr>
                    {{--                    {{ dd( $post->tags ) }}--}}
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

@endsection