@section('title','Dashboard')
@extends('Doctor.Layout.Doc.Header')

@section('content')

<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline"><i class="fa-solid fa-user-nurse" style="color: #74C0FC;"> DocApp</i></span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="{{route('Doctor.dashboard')}}" class="nav-link align-middle px-0 text-info">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                        <a href="{{route('Doctor.dashboard')}}" class="nav-link align-middle px-0 text-info">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Appointments</span>
                        </a>
                        <a href="/" class="nav-link align-middle px-0 text-info">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Logout</span>
                        </a>
                    </li>

                </ul>
                <hr>

            </div>
        </div>
        <div class="col py-3">
            <h4 class="text-center text-info mb-4">Patient Appointments</h4>
            <table class="table table-success table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Sr.no</th>
                        <th scope="col">Email</th>
                        <th scope="col">Patient Name</th>
                        <th scope="col">Timing</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $appoint = DB::table('appointment')->get();
                    $i=0;
                    @endphp
                    @foreach($appoint as $apt )
                    <tr>

                        <th scope="row">{{++$i}}</th>
                        <td>{{$apt->name}}</td>
                        <td>{{$apt->email}}</td>
                        <td>{{$apt->timing}}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection