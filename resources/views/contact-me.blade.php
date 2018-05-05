@extends('layouts.master')

@section('title')
    contact me
@endsection

@section('content')

    @if( count($errors) > 0 )
        <hr>
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach

    @endif

    <form method="post" action="{{ route('form-action') }}">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="email">Email address</label>
            <input required type="email" name="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter email">
            <small id="emial" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="comment">Comment:</label>
            <textarea required name="comment" class="form-control" rows="5" id="comment"></textarea>
        </div>

        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Send Your Comment</button>
    </form>


    @if( session('status') )
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

@endsection
