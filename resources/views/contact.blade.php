@extends('layouts.frame')

@section('title')
<title>Contacts - Gate Catering Project</title>
@endsection

@section('content')


<!-- Hero Start -->
<div class="container-fluid bg-light py-6 my-6 mt-0">
    <div class="container text-center animated bounceInDown">
        <h1 class="display-1 mb-4">Contact</h1>
        <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item text-dark" aria-current="page">Contact</li>
        </ol>
    </div>
</div>
<!-- Hero End -->


<!-- Contact Start -->
<div class="container-fluid contact py-6 wow bounceInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="p-5 bg-light rounded contact-form">
            <div class="row g-4">
                <div class="col-12">
                    <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Get in touch</small>
                    <h1 class="display-5 mb-0">Contact Us For Any Queries!</h1>
                </div>
                <div class="col-md-6 col-lg-7">
                    <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                    <form>
                        <input type="text" class="w-100 form-control p-3 mb-4 border-primary bg-light" placeholder="Your Name">
                        <input type="email" class="w-100 form-control p-3 mb-4 border-primary bg-light" placeholder="Enter Your Email">
                        <textarea class="w-100 form-control mb-4 p-3 border-primary bg-light" rows="4" cols="10" placeholder="Your Message"></textarea>
                        <button class="w-100 btn btn-primary form-control p-3 border-primary bg-primary rounded-pill" type="submit">Submit Now</button>
                    </form>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div>
                        <div class="d-inline-flex w-100 border border-primary p-4 rounded mb-4">
                            <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                            <div class="">
                                <h4>Address</h4>
                                <p>GATE,Golanthara , Berhampur, Ganjam ,Odisha,761008</p>
                            </div>
                        </div>
                        <div class="d-inline-flex w-100 border border-primary p-4 rounded mb-4">
                            <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                            <div class="">
                                <h4>Mail Us</h4>
                                <p class="mb-0">principal@gate.ac.in</p>
                            </div>
                        </div>
                        <div class="d-inline-flex w-100 border border-primary p-4 rounded">
                            <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                            <div class="">
                                <h4>Telephone</h4>
                                <p class="mb-2">+91 9337753377</p>
                                <p class="mb-0">+91 9338822004</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60276.293547869995!2d84.67325091362002!3d19.227133311197314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3d44942d60a401%3A0x6bb2d8dcf8ebb293!2sGandhi%20Academy%20of%20Technology%20and%20Engg.!5e0!3m2!1sen!2sin!4v1745332451819!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    </div>
</div>
<!-- Contact End -->

@endsection