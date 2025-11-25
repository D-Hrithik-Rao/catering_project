@extends('layouts.frame')

@section('title')
<title>Gate Catering Project</title>
@endsection

@section('style')

@endsection

@section('content')


<!-- Navbar End -->


<!-- Hero Start -->
<div class="container-fluid bg-light py-3 my-6 mt-0">
    <div class="container text-center animated bounceInDown">
        <h1 class="display-1 mb-4 headSubTitle"></h1>
        <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item "><a href="#" class="headTitle">Categories</a></li>
            <li class="breadcrumb-item text-dark headSubTitle" aria-current="page">Main-Course</li>
        </ol>
    </div>
</div>
<!-- Hero End -->

<!-- Item Start -->

<div class="container-fluid team py-3">
    <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3 headSubTitle"></small>
            <h1 class="display-5 mb-5">Select <span class="headSubTitle"></span> For your event</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-9">
                <div class="row" id="item-Detail">
                    <input type="hidden" id="item_id" value="{{ $id }}">

                </div>
            </div>
            <div class="col-lg-3">
                <div class="card p-3">
                    <h3 class="text-primary headSubTitle">Category</h3>
                    <div class="row" id="childCategoryList">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- Copyright End -->
@section('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function() {

        let item_id = $('#item_id').val();
        let cart = JSON.parse(localStorage.getItem("cart")) || {}; // Load cart from localStorage
        updateCartUI(); // Initialize cart count

        getItem(); // Fetch Items
        getCategoryDetails(); // Fetch Category Details
        getChildCategories(); // Fetch Child Categories

        function updateCartUI() {
            // Update cart count across all pages
            let cartCount = Object.keys(cart).length;
            $("#cart-count").text(cartCount);
        }

        function getItem() {
            $.ajax({
                type: "GET",
                url: `${API_URL}/Main-Category/items/${item_id}`,
                success: function(response) {
                    $("#item-Detail").empty();

                    if (response.length > 0) {
                        $.each(response, function(index, item) {
                            let itemTypeBadge = item.item_type === "veg" ?
                                `<img src="{{ asset('assets/img/veg.jpg')}}" alt="Veg" class="veg" style="width:20px;height:20px;">` :
                                `<img src="{{ asset('assets/img/non-veg.jpg')}}" alt="Non-Veg" class="veg" style="width:20px;height:20px;">`;

                            let itemHTML = `
                            <div class="col-lg-4 col-md-6 wow bounceInUp" data-wow-delay="0.1s">
                                <div class="item-card card">
                                    <div class="item-image">
                                        <img src="/storage/${item.item_image}" alt="${item.item_name}">
                                        ${itemTypeBadge}
                                    </div>
                                    <div class="item-detail">
                                        <p class="item-name">${item.item_name}</p>
                                        <p class="price">₹${parseFloat(item.price).toFixed(2)}/<sub>Plate</sub></p>
                                        <div class="cart-btn">
                                            <button class="btn btn-primary py-2 px-5 rounded-pill add-to-cart" 
                                                data-id="${item.id}" 
                                                data-name="${item.item_name}" 
                                                data-price="${item.price}" 
                                                data-image="/storage/${item.item_image}">
                                                Add to Cart <i class="fas fa-shopping-cart ps-2"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;
                            $("#item-Detail").append(itemHTML);
                        });
                    } else {
                        $("#item-Detail").html("<p>No items found.</p>");
                    }
                },
                error: function(error) {
                    console.error("Error fetching items:", error);
                }
            });
        }

        function getCategoryDetails() {
            $.ajax({
                type: "GET",
                url: `${API_URL}/Main-Category/Sub-category/${item_id}`,
                success: function(response) {
                    $(".headTitle").text(response.category_name);
                    $(".headSubTitle").text(response.sub_cat_name);
                },
                error: function(error) {
                    console.error("Error fetching category details:", error);
                }
            });
        }

        function getChildCategories() {
            $.ajax({
                type: "GET",
                url: `${API_URL}/fetch-child-categories/${item_id}`,
                success: function(response) {
                    $("#childCategoryList").html("");

                    if (response.length > 0) {
                        $.each(response, function(index, child) {
                            let childHTML = `
                            <div class="col-lg-6">
                                <div class="c-image">
                                    <a href="/Item/${child.id}">
                                        <img src="/storage/${child.cat_image}" alt="">
                                        <p class="cname">${child.sub_cat_name}</p>
                                    </a>
                                </div>
                            </div>
                        `;
                            $("#childCategoryList").append(childHTML);
                        });
                    } else {
                        $("#childCategoryList").html("<li>No child categories found.</li>");
                    }
                },
                error: function(error) {
                    console.error("Error fetching child categories:", error);
                }
            });
        }


        $(document).on("click", ".add-to-cart", function() {
            let button = $(this);
            let id = button.data("id");
            let name = button.data("name");
            let price = parseFloat(button.data("price"));
            let image = button.data("image");

            if (cart[id]) {
                showNotification("danger", "Item already added to cart!");
                return; // Stop further execution if item is already in cart
            }

            // Add item to cart if it's not already present
            cart[id] = {
                name,
                price,
                image
            };
            localStorage.setItem("cart", JSON.stringify(cart));

            updateCartUI(); // Update count
            showNotification("success", "Item added to cart!");
        });

        function showNotification(state, message) {
            Swal.fire({
                icon: state === "success" ? "success" : "error",
                title: message,
                showConfirmButton: false,
                timer: 1500
            });
        }

    });
</script>


@endsection

@endsection