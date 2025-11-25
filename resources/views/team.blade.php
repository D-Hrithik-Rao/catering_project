@extends('layouts.frame')

@section('title')
<title>Team - Smart catering service application</title>
@endsection

@section('content')
<div class="container-fluid bg-light py-6 my-6 mt-0">
    <div class="container text-center animated bounceInDown">
        <h1 class="display-1 mb-4">Our Team</h1>
        <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item text-dark" aria-current="page">Our Team</li>
        </ol>
    </div>
</div>

@include('layouts.Team');
@endsection