@extends('layouts.app')
@section('metatitle', '{{$user->name}}')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
            <hr>
            <h3>Your Blog Posts</h3>
            <a href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</a>
            <table class="table table-striped">
                <tr>
                    <th>Tittle</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach ($posts as $post)
                    <tr>
                        <td><a class="text-dark" href="{{ url('/blog') }}/posts/{{$post->id}}">{{$post->tittle}}</a></h3></td>
                        <td><a class="btn btn-success" href="{{ url('/blog') }}/posts/{{$post->id}}/edit">Edit</a></td>
                        <td>{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {!!Form::close()!!}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
