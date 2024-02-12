@section('title','Registration')
@extends('Doctor.Layout.Auth.Doctor')

@section('content')

<div class="card">
    <div class="card-header text-center">Doctor Registration</div>
    <div class="card-body">
        <form action="{{route('doctor.registration.save')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="Name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name">

            </div>
            <div class="mb-3">
                <label for="Name" class="form-label">Specialization</label>
                <input type="text" class="form-control" name="spl">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation">
            </div>
            <button type="submit" class="btn btn-success w-100">Register</button>
            <h6 class="text-center mt-1">Already Registered<a href="{{route('doctor.login')}}"> Login</a></h6>
        </form>
    </div>
</div>

@endsection