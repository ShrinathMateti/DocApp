@section('title','Login')
@extends('Doctor.Layout.Auth.Doctor')

@section('content')

<div class="card">
    <div class="card-header text-center">Doctor Login</div>

    <div class="card-body">
        <form method="post" action="{{route('doctor.login.save')}}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Login</button>
            <h6 class="text-center mt-2 mb-3">Don't Have An Account?<a href="{{route('doctor.registration')}}"> Register</a></h6>
            <a href="/">
                <h6 class="text-center">Go to Home</h6>
            </a>
        </form>
    </div>
</div>

@endsection