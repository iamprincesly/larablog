@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger text-center">
            {{$error}}
        </div>
    @endforeach
@endif

@if (session('success'))
    o
        {{session('success')}}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger text-center">
        {{session('error')}}
    </div>
@endif
