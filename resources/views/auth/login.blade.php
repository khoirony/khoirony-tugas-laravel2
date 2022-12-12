@extends('kerangka')

@section("content")
<div class="row justify-content-center mt-5">
    <div class="card col-6 shadow p-5">
        <h1 class="text-center">Login</h1> <br>
        @if($errors->any())
            <h1 style="color: red">
                {{ $errors->first() }}
            </h1>
        @endif
        
        <form action="" method="post">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection