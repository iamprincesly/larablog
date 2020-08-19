@extends('layouts.app')
@section('metatitle')
{{$post->tittle}}
@endsection
@section('content')
    <div class="jumbotron text-danger text-center">
        <div class="text-left"><a href="{{ URL::previous() }}" class="btn btn-success">Go Back</a></div>
        <h1>{{$post->tittle}}</h1>
        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
        <div class="container text-justify">
            {!!$post->body!!}
        </div>
        <hr>        
        <div class="text-left">
        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
        </div>
        @if (!Auth::guest()) 
            @if (Auth::user()->id == $post->user_id)            
                <a class="btn btn-success" href="{{ url('/blog') }}/posts/{{$post->id}}/edit">Edit</a>
                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
            @endif
        @endif        
    </div>
@endsection