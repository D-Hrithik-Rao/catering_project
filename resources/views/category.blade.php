@extends('layouts.frame')

@section('title')
<title>Gate Catering Project</title>
@endsection

@section('content')
<!-- Hero Start -->
<div class="container-fluid bg-light py-3 my-6 mt-0">
    <div class="container text-center animated bounceInDown">
        <h1 class="display-1 mb-4 headTitle">Main Course</h1>
        <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item text-dark headTitle" aria-current="page">Main-Course</li>
        </ol>
    </div>
</div>
<!-- Hero End -->

<!-- Item Start -->

<div class="container-fluid team py-3">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-9">
                <h3 class="text-primary mb-2 headTitle"></h3>
                <div class="row" id="itemContainer">
                    <input type="hidden" id="item_id" value="{{ $id }}">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card p-3">
                    <h3 class="text-primary">Main Category</h3>
                    <div class="row" id="categoryContainer">
                        <div class="col-lg-6">
                            <div class="c-image">
                                <img src="img/White-Rice.jpg" alt="">
                                <p class="cname">Rice</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="c-image">
                                <img src="img/paneer butter masala.jpg" alt="">
                                <p class="cname">Paneer</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="c-image">
                                <img src="img/chicken.png" alt="">
                                <p class="cname">Chicken</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="c-image">
                                <img src="img/fish.jpg" alt="">
                                <p class="cname">Fish</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('script')


<script>
    $(document).ready(function() {
        var item_id = $("#item_id").val(); // Get the ID from hidden input or URL parameter

        // Fetch sub-category items
        $.ajax({
            type: "GET",
            url: `${API_URL}/Sub-Category/${item_id}`,
            success: function(response) {
                let itemContainer = $("#itemContainer"); // The div where items will be appended
                itemContainer.empty();
                $.each(response.data, function(index, item) {
                    let itemCard = `
                    <div class="col-lg-4">
                    <a href="/Item/${item.id}">
                        <div class="item-card card">
                            <div class="item-image">
                                <img src="/storage/${item.cat_image}" alt="${item.sub_cat_name}">
                            </div>
                            <div class="item-detail">
                                <p class="item-name">${item.sub_cat_name}</p>
                            </div>
                        </div>
                    </a>
                    </div>
                `;
                    itemContainer.append(itemCard);
                });
            },
            error: function(error) {
                console.error("Error fetching sub-category items:", error);
            }
        });

        $.ajax({
            type: "GET",
            url: `${API_URL}/Main-Category/title/${item_id}`,
            success: function(response) {
                $(".headTitle").text(response.name);
            },
            error: function(error) {
                console.error("Error fetching Title items:", error);
            }
        });

        // Fetch main category data
        $.ajax({
            type: "GET",
            url: `${API_URL}/Main-Category/StatuswiseList`,
            success: function(response) {
                let categoryContainer = $("#categoryContainer"); // The div where categories will be appended
                categoryContainer.empty(); // Clear previous categories

                $.each(response, function(index, item) {
                    let categoryCard = `
                    <div class="col-lg-6">
                      <a href="/Category/${item.id}">
                        <div class="c-image">
                            <img src="/storage/${item.image}" alt="${item.name}">
                            <p class="cname">${item.name}</p>
                        </div>
                      </a>
                    </div>
                `;
                    categoryContainer.append(categoryCard);
                });
            },
            error: function(error) {
                console.error("Error fetching main categories:", error);
            }
        });
    });
</script>
@endsection

@endsection