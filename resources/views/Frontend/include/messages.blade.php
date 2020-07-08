@if (count($errors) > 0)
    @foreach ($errors as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

@if (session('success'))
    <div class="alert alert-success mt-5">
        {{session('success')}}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger mt-5">
        {{session('error')}}
    </div>
@endif