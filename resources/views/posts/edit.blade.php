@extends('layouts.app')
@section('metatitle', 'Edit Posts {{$post->tittle}}')
@section('content')
    <div class="jumbotron text-danger text-center">
        <h1>Edit Posts</h1>
        {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group text-left">
                {{Form::label('tittle', 'Tittle')}}
                {{Form::text('tittle', $post->tittle, ['class' => 'form-control', 'placeholder' => 'Tittle'])}}
            </div>
            <div class="form-group text-left">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', $post->body, ['id' => 'editor', 'class' => 'form-control', 'placeholder' => 'Blog Post Here!'])}}
            </div>
            <div class="form-group text-left">
                {{Form::file('cover_image')}}
            </div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection