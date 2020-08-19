@extends('layouts.app')
@section('metatitle', 'Create New Post')
@section('content')
    <div class="jumbotron text-danger text-center">
        <h1>Create Posts</h1>
        {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group text-left">
                {{Form::label('tittle', 'Tittle')}}
                {{Form::text('tittle', '', ['class' => 'form-control', 'placeholder' => 'Tittle'])}}
            </div>
            <div class="form-group text-left">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', '', ['id' => 'editor', 'class' => 'form-control', 'placeholder' => 'Blog Post Here!'])}}
            </div>
            <div class="form-group text-left">
                {{Form::file('cover_image')}}
            </div>
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection