@extends('layouts.frame')

@section('title')
<title>Orders - Gate Catering Project</title>
@endsection

@section('content')

<!-- Hero Start -->
<div class="container-fluid bg-light py-3 my-6 mt-0">
    <div class="container text-center animated bounceInDown">
        <h1 class="display-1 mb-4">Orders</h1>
        <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item text-dark" aria-current="page">Orders</li>
        </ol>
    </div>
</div>
<!-- Hero End -->

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="order-history card">
                            <div class="card-header">
                                <h5>Event Name</h5>
                                <p class="mb-0">23 feb 2025, 08:38 pm</p>
                            </div>
                            <div class="card-body">
                                <div class="order-items">
                                    <div class="c-name text-primary mb-2">Fish</div>
                                    <div class="item-card d-flex">
                                        <div class="iimage">
                                            <img src="img/fish.jpg" alt="">
                                        </div>
                                        <div class="iitem">
                                            <div class="item-name">Fish Curry</div>
                                            <div class="item-price">₹40.00/<sub>Plate</sub></div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="item-card d-flex">
                                        <div class="iimage">
                                            <img src="img/fish.jpg" alt="">
                                        </div>
                                        <div class="iitem">
                                            <div class="item-name">Fish Curry</div>
                                            <div class="item-price">₹40.00/<sub>Plate</sub></div>
                                        </div>
                                    </div>
                                    <hr>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary text-white w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        View More
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title text-primary" id="exampleModalLabel">Event Name</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="c-name text-primary mb-2">Fish</div>
                                                    <div class="item-card d-flex">
                                                        <div class="iimage">
                                                            <img src="img/fish.jpg" alt="">
                                                        </div>
                                                        <div class="iitem">
                                                            <div class="item-name">Fish Curry</div>
                                                            <div class="item-price">₹40.00/<sub>Plate</sub></div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary text-white">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex align-items-canter justify-content-between">
                                    <div class="items">
                                        <p class="mb-1">13 items</p>
                                        <p class="mb-1">₹330.00</p>
                                    </div>
                                    <div class="status">
                                        <p class="mb-0 pt-3"><i class="fas fa-check"></i> Delivered</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection