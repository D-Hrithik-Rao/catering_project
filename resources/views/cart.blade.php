@extends('layouts.frame')

@section('title')
<title>Cart - Gate Catering Project</title>
@endsection

@section('content')

<!-- Hero Start -->
<div class="container-fluid bg-light py-3 my-6 mt-0">
    <div class="container text-center animated bounceInDown">
        <h1 class="display-1 mb-4">Cart</h1>
        <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item text-dark" aria-current="page">Cart</li>
        </ol>
    </div>
</div>
<!-- Hero End -->

<section>
    <div class="container">
        <div class="row">
            <!-- Cart Items -->
            <div class="col-lg-9">
                <div id="cart-container">
                    <!-- Categories & Items will be loaded dynamically -->
                </div>
            </div>

            <!-- Shipping & Summary -->
            <div class="col-lg-3">
                <h2 class="text-primary">Order Summary</h2>
                <div class="card rounded-0">
                    <ul class="check-out">
                        <li>Enter Total People for Food:</li>
                        <div class="mb-3">
                            <input type="number" id="total-people" class="form-control border-primary p-2"
                                placeholder="Enter total people">
                        </div>
                        <li>Total Item Amount: <span id="total-amount">₹0.00</span></li>
                        <li>Discount: <span id="discount">0%</span></li>
                        <li>Sub Total: <span id="final-amount">₹0.00</span></li>
                        <a href="Book" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block book-now rounded-pill">Book Now</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('script')
<script>
    $(document).ready(function() {
        let cart = JSON.parse(localStorage.getItem("cart")) || {};
        updateCartUI();

        function updateCartUI() {
            let totalPrice = 0;
            let srNo = 1;

            $("#cart-container").html("");

            if (Object.keys(cart).length === 0) {
                $("#cart-container").html("<p class='text-center'>Your cart is empty.</p>");
                return;
            }

            let cartHTML = `
                <div class="cart-section mb-4">
                    <h2 class="cart-title text-primary">Your Cart</h2>
                    <table class="table table-responsive table-bordered cart-page">
                        <thead>
                            <tr>
                                <th>Sr no.</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="cart-items"></tbody>
                    </table>
                </div>
            `;

            $("#cart-container").append(cartHTML);

            $.each(cart, function(itemId, item) {
                let price = parseFloat(item.price) || 0;
                totalPrice += price;

                let itemHTML = `
                    <tr id="item-${itemId}">
                        <td>${srNo++}</td>
                        <td>
                            <div class="item d-flex align-items-center">
                                <div class="item-image">
                                    <img src="${item.image}" alt="${item.name}" width="50">
                                </div>
                                <div class="item-detail ps-2">
                                    <p class="name mb-0">${item.name}</p>
                                </div>
                            </div>
                        </td>
                        <td>₹${price.toFixed(2)}/<sub>plate</sub></td>
                        <td>
                            <div class="delete-item" data-id="${itemId}">
                                <i class="far fa-trash-alt text-danger"></i>
                            </div>
                        </td>
                    </tr>
                `;

                $("#cart-items").append(itemHTML);
            });

            $("#cart-items").hide().fadeIn(300);
            $("#total-amount").text(`₹${totalPrice.toFixed(2)}`);
            calculateDiscount();
        }

        function calculateDiscount() {
            let totalPeople = parseInt($("#total-people").val()) || 0;
            let totalPrice = parseFloat($("#total-amount").text().replace("₹", "")) || 0;
            let discountPercentage = 0;

            if (totalPeople < 200) {
                discountPercentage = 0;
                $("#discount").text("No Discount");
            } else if (totalPeople >= 200 && totalPeople <= 300) {
                discountPercentage = 10;
            } else if (totalPeople >= 400 && totalPeople <= 600) {
                discountPercentage = 20;
            } else if (totalPeople >= 601 && totalPeople <= 999) {
                discountPercentage = 25;
            } else if (totalPeople >= 1000) {
                discountPercentage = 30;
            }

            let discountAmount = (totalPrice * discountPercentage) / 100;
            let finalAmount = totalPrice - discountAmount;

            if (discountPercentage > 0) {
                $("#discount").text(`${discountPercentage}%`);
            }

            $("#final-amount").text(`₹${finalAmount.toFixed(2)}`);
        }

        $("#total-people").on("input", function() {
            calculateDiscount();
        });

        $(document).on("click", ".delete-item", function() {
            let id = $(this).data("id");

            $(`#item-${id}`).fadeOut(300, function() {
                delete cart[id];
                localStorage.setItem("cart", JSON.stringify(cart));
                updateCartUI();
            });
        });
    });
</script>

@endsection