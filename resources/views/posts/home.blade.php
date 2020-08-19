@extends('layouts.app')
@section('metatitle', 'Blog')
@section('content')
    <div class="jumbotron text-danger text-center">
        <h1>Posts</h1>
        @if (count($posts) > 0)
            @foreach ($posts as $post)
                <div class="well bg-secondary">
                    <div class="row text-left">
                        <div class="col-md-4 col-sm-4">
                            <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <h3><a class="text-white" href="{{ url('/blog') }}/posts/{{$post->slug}}">{{$post->tittle}}</a></h3>
                            <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                        </div>
                    </div>                    
                </div>
            @endforeach
            <hr>
            {{ $posts->links() }}
        @else
            <p>No posts found!</p>
        @endif
    </div>
@endsection