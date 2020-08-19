@extends('layouts.app')
@section('metatitle', '{{$tittle}}')
@section('content')
<div class="jumbotron text-center">
    <h1 class="title">{{$tittle}}</h1>
    @if (count($services) > 0)
        <ul class="list-group text-left">
            @foreach ($services as $services)
                <li class="list-group-item">{{$services}}</li>
            @endforeach
        </ul>
    @endif
</div>
@endsection
