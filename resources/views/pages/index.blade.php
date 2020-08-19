@extends('layouts.app')
@section('metatitle', '{{$tittle}}')
@section('content')
<div class="jumbotron text-center">
    <h1>{{$tittle}}</h1>
    <p>This is laravel application from prince sly</p>
    <p><a href="/login" class="btn btn-primary btn-lg" role="button">Login</a> <a href="/register" class="btn btn-success btn-lg" role="button">Register</a></p>
</div>

    
@endsection

