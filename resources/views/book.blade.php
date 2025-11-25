@extends('layouts.frame')

@section('title')
<title>Book - Gate Catering Project</title>
@endsection

@section('content')

<!-- Hero Start -->
<div class="container-fluid bg-light py-6 my-6 mt-0">
    <div class="container text-center animated bounceInDown">
        <h1 class="display-1 mb-4">Booking</h1>
        <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item text-dark" aria-current="page">Booking</li>
        </ol>
    </div>
</div>
<!-- Hero End -->


<!-- Book Us Start -->
<div class="container-fluid contact py-6 wow bounceInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-0">
            <div class="col-1">
                <img src="frontend/img/background-site.jpg" class="img-fluid h-100 w-100 rounded-start" style="object-fit: cover; opacity: 0.7;" alt="">
            </div>
            <div class="col-10">
                <div class="border-bottom border-top border-primary bg-light py-5 px-4">
                    <div class="text-center">
                        <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Book Us</small>
                        <h1 class="display-5 mb-5">Where you want Our Services</h1>
                    </div>
                    <form id="booking-form">
                        <div class="row g-4 form">
                            <div class="col-lg-4 col-md-6">
                                <input type="text" name="full_name" class="form-control border-primary p-2" placeholder="Your Full name">
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="mobile" name="contact_number" class="form-control border-primary p-2" placeholder="Your Contact No.">
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="text" name="event_address" class="form-control border-primary p-2" placeholder="Event Full Address">
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="text" name="city" class="form-control border-primary p-2" placeholder="Enter City name">
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="text" name="event_name" class="form-control border-primary p-2" placeholder="Enter Event Name">
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="date" name="delivery_date" name="city" class="form-control border-primary p-2" placeholder="Select Date">
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary px-5 py-3 rounded-pill">Submit Now</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-1">
                <img src="frontend/img/background-site.jpg" class="img-fluid h-100 w-100 rounded-end" style="object-fit: cover; opacity: 0.7;" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Book Us End -->

@section('script')
<script>
    $(document).ready(function() {
        $('#booking-form').on('submit', function(e) {
            e.preventDefault();

            let user = JSON.parse(localStorage.getItem("user")); // Or get from auth context
            let cart = JSON.parse(localStorage.getItem("cart")) || {};

            if (!user || Object.keys(cart).length === 0) {
                alert("Please login and add items to cart before booking.");
                return;
            }

            let formData = {
                user_id: user.id,
                full_name: $('input[name="full_name"]').val(),
                contact_number: $('input[name="contact_number"]').val(),
                event_address: $('input[name="event_address"]').val(),
                city: $('input[name="city"]').val(),
                event_name: $('input[name="event_name"]').val(),
                delivery_date: $('input[name="delivery_date"]').val(),
                cart_items: cart
            };

            $.ajax({
                type: "POST",
                url: `${API_URL}/place-order`,
                data: JSON.stringify(formData),
                contentType: "application/json",
                success: function(response) {
                    alert("Booking placed successfully!");
                    localStorage.removeItem("cart");
                    $('#booking-form')[0].reset();
                    window.location.href = "/Success"; // Or wherever you want
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                    alert("Something went wrong while placing your booking.");
                }
            });
        });
    });
</script>

@endsection
@endsection