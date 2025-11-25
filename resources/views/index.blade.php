@extends('layouts.frame')

@section('title')
<title>Smart catering service application - GATE</title>
@endsection

@section('content')

<!-- Modal Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center">
                <div class="input-group w-75 mx-auto d-flex">
                    <input type="search" class="form-control bg-transparent p-3" placeholder="keywords" aria-describedby="search-icon-1">
                    <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Search End -->

<!-- Hero Start -->
<div class="container-fluid bg-light py-6 my-6 mt-0">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-7 col-md-12">
                <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-4 animated bounceInDown">Welcome to Catering Services</small>
                <h1 class="display-1 mb-4 animated bounceInDown">Book <span class="text-primary">Catering</span> For Your Dream Event</h1>
                <a href="" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 me-4 animated bounceInLeft">Book Now</a>
                <a href="" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 animated bounceInLeft">Know More</a>
            </div>
            <div class="col-lg-5 col-md-12">
                <img src="{{ asset('frontend/img/hero.png')}}" class="img-fluid rounded animated zoomIn" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->

<div class="container-fluid service py-6">
    <div class="container">
        <div class="wow bounceInUp" data-wow-delay="0.1s">
            <h1 class="display-5 mb-5"><span class="text-primary">Item</span> Category</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-2 col-md-4 col-sm-6 wow bounceInUp" data-wow-delay="0.1s">
                <div class="bg-light rounded service-item">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <a href="/Category/1">
                            <div class="service-content-icon text-center">
                                <i class="fas fa-utensils fa-5x text-primary mb-4"></i>
                                <h5 class="mb-3">Main Course</h5>
                                <a href="/Category/1" class="btn btn-primary px-4 py-2 rounded-pill">View Item</a>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 wow bounceInUp" data-wow-delay="0.3s">
                <div class="bg-light rounded service-item">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <a href="/Category/2">
                            <div class="service-content-icon text-center">
                                <i class="fas fa-pizza-slice fa-5x text-primary mb-4"></i>
                                <h5 class="mb-3">Starter</h5>
                                <a href="/Category/2" class="btn btn-primary px-4 py-2 rounded-pill">View Item</a>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 wow bounceInUp" data-wow-delay="0.5s">
                <div class="bg-light rounded service-item">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <a href="/Category/3">
                            <div class="service-content-icon text-center">
                                <i class="fas fa-wine-glass fa-5x text-primary mb-4"></i>
                                <h5 class="mb-3">Beverage</h5>
                                <a href="/Category/5" class="btn btn-primary px-4 py-2 rounded-pill">View Item</a>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 wow bounceInUp" data-wow-delay="0.7s">
                <div class="bg-light rounded service-item">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <a href="/Category/4">
                            <div class="service-content-icon text-center">
                                <i class="fas fa-ice-cream fa-5x text-primary mb-4"></i>
                                <h5 class="mb-3">Deserts</h5>
                                <a href="/Category/3" class="btn btn-primary px-4 py-2 rounded-pill">View Item</a>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 wow bounceInUp" data-wow-delay="0.7s">
                <div class="bg-light rounded service-item">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <a href="/Category/5">
                            <div class="service-content-icon text-center">
                                <i class="fas fa-utensils fa-5x text-primary mb-4"></i>
                                <h5 class="mb-3">Tiffins</h5>
                                <a href="/Category/4" class="btn btn-primary px-4 py-2 rounded-pill">View Item</a>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 wow bounceInUp" data-wow-delay="0.7s">
                <div class="bg-light rounded service-item">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <a href="/Category/6">
                            <div class="service-content-icon text-center">
                                <i class="fas fa-utensils fa-5x text-primary mb-4"></i>
                                <h5 class="mb-3">South Indian</h5>
                                <a href="/Category/6" class="btn btn-primary px-4 py-2 rounded-pill">View Item</a>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About Satrt -->
<div class="container-fluid py-6">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                <img src="{{ asset('frontend/img/about.jpg')}}" class="img-fluid rounded" alt="">
            </div>
            <div class="col-lg-7 wow bounceInUp" data-wow-delay="0.3s">
                <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">About Us</small>
                <h1 class="display-5 mb-4">Trusted By 200 + satisfied clients</h1>
                <p class="mb-4">Our Catering provides planning, organizing, and overseeing food and beverage services for various events, such as weddings, corporate functions, parties, and conferences. It ensures that clients' needs and expectations are met by coordinating menus, staff, logistics, and presentation. Effective catering management balances quality, efficiency, and creativity to deliver exceptional dining experiences..</p>
                <div class="row g-4 text-dark mb-5">
                    <div class="col-sm-6">
                        <i class="fas fa-share text-primary me-2"></i>Fresh and Fast food Delivery
                    </div>
                    <div class="col-sm-6">
                        <i class="fas fa-share text-primary me-2"></i>24/7 Customer Support
                    </div>
                    <div class="col-sm-6">
                        <i class="fas fa-share text-primary me-2"></i>Easy Customization Options
                    </div>
                    <div class="col-sm-6">
                        <i class="fas fa-share text-primary me-2"></i>Delicious Deals for Delicious Meals
                    </div>
                </div>
                <a href="" class="btn btn-primary py-3 px-5 rounded-pill">About Us<i class="fas fa-arrow-right ps-2"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Fact Start-->
<div class="container-fluid faqt py-6">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-7">
                <div class="row g-4">
                    <div class="col-sm-4 wow bounceInUp" data-wow-delay="0.3s">
                        <div class="faqt-item bg-primary rounded p-4 text-center">
                            <i class="fas fa-users fa-4x mb-4 text-white"></i>
                            <h1 class="display-4 fw-bold" data-toggle="counter-up">689</h1>
                            <p class="text-dark text-uppercase fw-bold mb-0">Happy Customers</p>
                        </div>
                    </div>
                    <div class="col-sm-4 wow bounceInUp" data-wow-delay="0.5s">
                        <div class="faqt-item bg-primary rounded p-4 text-center">
                            <i class="fas fa-users-cog fa-4x mb-4 text-white"></i>
                            <h1 class="display-4 fw-bold" data-toggle="counter-up">107</h1>
                            <p class="text-dark text-uppercase fw-bold mb-0">Expert Chefs</p>
                        </div>
                    </div>
                    <div class="col-sm-4 wow bounceInUp" data-wow-delay="0.7s">
                        <div class="faqt-item bg-primary rounded p-4 text-center">
                            <i class="fas fa-check fa-4x mb-4 text-white"></i>
                            <h1 class="display-4 fw-bold" data-toggle="counter-up">253</h1>
                            <p class="text-dark text-uppercase fw-bold mb-0">Events Complete</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                <div class="video">
                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Video -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                        allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fact End -->


<!-- Service Start -->
<div class="container-fluid service py-6">
    <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Our Services</small>
            <h1 class="display-5 mb-5">What We Offer</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.1s">
                <div class="bg-light rounded service-item">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-icon text-center">
                            <i class="fas fa-cheese fa-7x text-primary mb-4"></i>
                            <h4 class="mb-3">Wedding Services</h4>
                            <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                            <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.3s">
                <div class="bg-light rounded service-item">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-icon text-center">
                            <i class="fas fa-pizza-slice fa-7x text-primary mb-4"></i>
                            <h4 class="mb-3">Corporate Catering</h4>
                            <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                            <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.5s">
                <div class="bg-light rounded service-item">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-icon text-center">
                            <i class="fas fa-hotdog fa-7x text-primary mb-4"></i>
                            <h4 class="mb-3">Cocktail Reception</h4>
                            <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                            <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.7s">
                <div class="bg-light rounded service-item">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-icon text-center">
                            <i class="fas fa-hamburger fa-7x text-primary mb-4"></i>
                            <h4 class="mb-3">Bento Catering</h4>
                            <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                            <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.1s">
                <div class="bg-light rounded service-item">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-icon text-center">
                            <i class="fas fa-wine-glass-alt fa-7x text-primary mb-4"></i>
                            <h4 class="mb-3">Pub Party</h4>
                            <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                            <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.3s">
                <div class="bg-light rounded service-item">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-icon text-center">
                            <i class="fas fa-walking fa-7x text-primary mb-4"></i>
                            <h4 class="mb-3">Home Delivery</h4>
                            <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                            <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.5s">
                <div class="bg-light rounded service-item">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-icon text-center">
                            <i class="fas fa-wheelchair fa-7x text-primary mb-4"></i>
                            <h4 class="mb-3">Sit-down Catering</h4>
                            <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                            <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.7s">
                <div class="bg-light rounded service-item">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-icon text-center">
                            <i class="fas fa-utensils fa-7x text-primary mb-4"></i>
                            <h4 class="mb-3">Buffet Catering</h4>
                            <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                            <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Events Start -->
<div class="container-fluid event py-6">
    <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Latest Events</small>
            <h1 class="display-5 mb-5">Our Social & Professional Events Gallery</h1>
        </div>
        <div class="tab-class text-center">
            <ul class="nav nav-pills d-inline-flex justify-content-center mb-5 wow bounceInUp" data-wow-delay="0.1s">
                <li class="nav-item p-2">
                    <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-10">
                        <span class="text-dark" style="width: 150px;">All Events</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <a class="d-flex py-2 mx-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-11">
                        <span class="text-dark" style="width: 150px;">Wedding</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-12">
                        <span class="text-dark" style="width: 150px;">Corporate</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-13">
                        <span class="text-dark" style="width: 150px;">Cocktail</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-14">
                        <span class="text-dark" style="width: 150px;">Buffet</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="tab-10" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.1s">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="{{ asset('frontend/img/event-1.jpg')}}" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Wedding</h4>
                                            <a href="img/event-1.jpg" data-lightbox="event-1" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.3s">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="{{ asset('frontend/img/event-2.jpg')}}" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Corporate</h4>
                                            <a href="img/event-2.jpg" data-lightbox="event-2" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.5s">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="{{ asset('frontend/img/event-3.jpg')}}" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Wedding</h4>
                                            <a href="img/event-3.jpg" data-lightbox="event-3" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.7s">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="{{ asset('frontend/img/event-4.jpg')}}" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Buffet</h4>
                                            <a href="img/event-4.jpg" data-lightbox="event-4" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.1s">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="{{ asset('frontend/img/event-5.jpg')}}" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Cocktail</h4>
                                            <a href="img/event-5.jpg" data-lightbox="event-5" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.3s">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="{{ asset('frontend/img/event-6.jpg')}}" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Wedding</h4>
                                            <a href="img/event-6.jpg" data-lightbox="event-6" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.5s">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="{{ asset('frontend/img/event-7.jpg')}}" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Buffet</h4>
                                            <a href="img/event-7.jpg" data-lightbox="event-7" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.7s">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="{{ asset('frontend/img/event-8.jpg')}}" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Corporate</h4>
                                            <a href="img/event-8.jpg" data-lightbox="event-17" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-11" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-3">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="{{ asset('frontend/img/event-1.jpg')}}" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Wedding</h4>
                                            <a href="img/01.jpg" data-lightbox="event-8" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="{{ asset('frontend/img/event-2.jpg')}}" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Wedding</h4>
                                            <a href="img/01.jpg" data-lightbox="event-9" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-12" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-3">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="{{ asset('frontend/img/event-3.jpg')}}" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Corporate</h4>
                                            <a href="img/01.jpg" data-lightbox="event-10" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="{{ asset('frontend/img/event-4.jpg')}}" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Corporate</h4>
                                            <a href="img/01.jpg" data-lightbox="event-11" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-13" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-3">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="{{ asset('frontend/img/event-5.jpg')}}" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Cocktail</h4>
                                            <a href="img/01.jpg" data-lightbox="event-12" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="{{ asset('frontend/img/event-6.jpg')}}" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Cocktail</h4>
                                            <a href="img/01.jpg" data-lightbox="event-13" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-14" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-3">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="{{ asset('frontend/img/event-7.jpg')}}" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Buffet</h4>
                                            <a href="img/01.jpg" data-lightbox="event-14" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="{{ asset('frontend/img/event-8.jpg')}}" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Buffet</h4>
                                            <a href="img/01.jpg" data-lightbox="event-15" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Events End -->


<!-- Menu Start -->
<div class="container-fluid menu bg-light py-6 my-6">
    <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Our Menu</small>
            <h1 class="display-5 mb-5">Most Popular Food in the World</h1>
        </div>
        <div class="tab-class text-center">
            <ul class="nav nav-pills d-inline-flex justify-content-center mb-5 wow bounceInUp" id="categoryTabs" data-wow-delay="0.1s">
                <li class="nav-item p-2">
                    <a class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill active" data-bs-toggle="pill" href="#tab-6">
                        <span class="text-dark" style="width: 150px;">Starter</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="subcategoryContent">
                <div id="tab-6" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.1s">
                            <div class="menu-item d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-01.jpg')}}" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Paneer</h4>
                                        <h4 class="text-primary">$90</h4>
                                    </div>
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.2s">
                            <div class="menu-item d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-02.jpg')}}" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Sweet Potato</h4>
                                        <h4 class="text-primary">$90</h4>
                                    </div>
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.3s">
                            <div class="menu-item d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-03.jpg')}}" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Sabudana Tikki</h4>
                                        <h4 class="text-primary">$90</h4>
                                    </div>
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.4s">
                            <div class="menu-item d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-04.jpg')}}" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Pizza</h4>
                                        <h4 class="text-primary">$90</h4>
                                    </div>
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.5s">
                            <div class="menu-item d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-05.jpg')}}" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Bacon</h4>
                                        <h4 class="text-primary">$90</h4>
                                    </div>
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.6s">
                            <div class="menu-item d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-06.jpg')}}" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Chicken</h4>
                                        <h4 class="text-primary">$90</h4>
                                    </div>
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.7s">
                            <div class="menu-item d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-07.jpg')}}" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Blooming</h4>
                                        <h4 class="text-primary">$90</h4>
                                    </div>
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.8s">
                            <div class="menu-item d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('frontend/img/menu-08.jpg')}}" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Sweet</h4>
                                        <h4 class="text-primary">$90</h4>
                                    </div>
                                    <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Menu End -->

<!-- Team Start -->
@include('layouts.Team');
<!-- Team End -->


<!-- Testimonial Start -->
@include('layouts.Testimonial');
<!-- Testimonial End -->


<!-- Blog Start -->
<div class="container-fluid blog py-6">
    <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Our Blog</small>
            <h1 class="display-5 mb-5">Be First Who Read News</h1>
        </div>
        <div class="row gx-4 justify-content-center">
            <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s">
                <div class="blog-item">
                    <div class="overflow-hidden rounded">
                        <img src="{{ asset('frontend/img/blog-1.jpg')}}" class="img-fluid w-100" alt="">
                    </div>
                    <div class="blog-content mx-4 d-flex rounded bg-light">
                        <div class="text-dark bg-primary rounded-start">
                            <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                <p class="fw-bold mb-0">16</p>
                                <p class="fw-bold mb-0">Sep</p>
                            </div>
                        </div>
                        <a href="#" class="h5 lh-base my-auto h-100 p-3">How to get more test in your food from</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.3s">
                <div class="blog-item">
                    <div class="overflow-hidden rounded">
                        <img src="{{ asset('frontend/img/blog-2.jpg')}}" class="img-fluid w-100" alt="">
                    </div>
                    <div class="blog-content mx-4 d-flex rounded bg-light">
                        <div class="text-dark bg-primary rounded-start">
                            <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                <p class="fw-bold mb-0">16</p>
                                <p class="fw-bold mb-0">Sep</p>
                            </div>
                        </div>
                        <a href="#" class="h5 lh-base my-auto h-100 p-3">How to get more test in your food from</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.5s">
                <div class="blog-item">
                    <div class="overflow-hidden rounded">
                        <img src="{{ asset('frontend/img/blog-3.jpg')}}" class="img-fluid w-100" alt="">
                    </div>
                    <div class="blog-content mx-4 d-flex rounded bg-light">
                        <div class="text-dark bg-primary rounded-start">
                            <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                <p class="fw-bold mb-0">16</p>
                                <p class="fw-bold mb-0">Sep</p>
                            </div>
                        </div>
                        <a href="#" class="h5 lh-base my-auto h-100 p-3">How to get more test in your food from</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->

@section('script')
<script>
    $(document).ready(function() {
        // Fetch Main Categories
        $.ajax({
            url: `${API_URL}/get-categories`,
            type: 'GET',
            success: function(categories) {
                let categoryHtml = '';
                categories.forEach((category, index) => {
                    categoryHtml += `<li class="nav-item p-2">
                    <a class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill ${index === 0 ? 'active' : ''}" 
                       data-bs-toggle="pill" 
                       href="#tab-${category.id}" 
                       data-id="${category.id}">
                        <span class="text-dark" style="width: 150px;">${category.name}</span>
                    </a>
                </li>`;
                });
                $('#categoryTabs').html(categoryHtml);

                // Load first category's subcategories by default
                if (categories.length > 0) {
                    loadSubcategories(categories[0].id);
                }
            }
        });

        // On category click, fetch subcategories
        $(document).on('click', '#categoryTabs a', function() {
            let catId = $(this).data('id');
            $('#categoryTabs a').removeClass('active');
            $(this).addClass('active');
            loadSubcategories(catId);
        });

        function loadSubcategories(catId) {
            $.ajax({
                url: `${API_URL}/get-subcategories/${catId}`,
                type: 'GET',
                success: function(subcategories) {
                    let subcategoryHtml = `<div id="tab-${subcategories.cat_id}" class="tab-pane fade show p-0 active">
                    <div class="row g-4">`;
                    if (subcategories.length > 0) {
                        subcategories.forEach(sub => {
                            subcategoryHtml += `
                            <div class="col-lg-6">
                                
                                <div class="menu-item d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded-circle" src="/storage/${sub.cat_image}" style="height: 100px" alt="">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                            <h4>${sub.sub_cat_name}</h4>
                                        </div>
                                        <p class="mb-0">See items related <b>${sub.sub_cat_name}</b> <a href="/Item/${sub.id}"> -> </a></p>
                                    </div>
                                </div>
                            </div>`;
                        });
                    } else {
                        subcategoryHtml += `<p>No subcategories found.</p>`;
                    }
                    subcategoryHtml += `</div>
                    </div>`;
                    $('#subcategoryContent').html(subcategoryHtml);
                }
            });
        }
    });
</script>
@endsection


@endsection