@extends('layouts.master')

@section('title')
    Create New Post
@endsection

@section('content')

    @if( count($errors) > 0 )
        <hr>
        @foreach($errors->all() as $error)
            <div class="col-sm-12 alert alert-danger col-md-12 col-sm-12" role="alert">
                {{ $error }}
            </div>
        @endforeach

    @endif

    @if( session('status') )
        <div class="alert alert-success col-sm-12">
            {{ session('status') }}
        </div>
    @endif
{{--{{dd($post)}}--}}

    <form class="col-sm-12" action="{{ route('blog.update',$post[0]->id) }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Title</label>
            <input value="{{ $post[0]->title }}" name="title" required type="text" class="form-control" id="title" placeholder="Title">

        </div>

        <div class="form-group">
            <label for="body">Body of your Post</label>
            <textarea name="body" required class="form-control" id="body" rows="5"
                      placeholder="enter your text here ...">{{ $post[0]->body }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary btn-lg btn-block">save</button>

    </form>
@endsection