<div class="container-fluid nav-bar">
    <div class="container">
        <nav class="navbar navbar-light navbar-expand-lg py-4">
            <a href="{{ url('/Home')}}" class="navbar-brand">
                <h1 class="text-primary fw-bold mb-0"><img src="frontend/img/image.png" style="height: 50px;" alt=""><span class="text-dark">GATE</span> </h1>
            </a>
            <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-primary"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="{{ url('/Home')}}" class="nav-item nav-link">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About Us</a>
                        <div class="dropdown-menu bg-light">
                            <a href="{{ url('/About')}}" class="dropdown-item">Information</a>
                            <a href="{{ url('/Team')}}" class="dropdown-item">Our Team</a>
                            <a href="{{ url('/Testimonial')}}" class="dropdown-item">Our Clients</a>
                        </div>
                    </div>
                    <a href="{{ url('/Service')}}" class="nav-item nav-link">Services</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Menu</a>
                        <div class="dropdown-menu bg-light">
                            <a href="{{ url('/Category/1')}}" class="dropdown-item">Main-Course</a>
                            <a href="{{ url('/Category/2')}}" class="dropdown-item">Starter</a>
                            <a href="{{ url('/Category/5')}}" class="dropdown-item">Beverage</a>
                            <a href="{{ url('/Category/3')}}" class="dropdown-item">Deserts</a>
                            <a href="{{ url('/Category/4')}}" class="dropdown-item">Tiffins</a>
                            <a href="{{ url('/Category/6')}}" class="dropdown-item">South-Indan</a>

                        </div>
                    </div>
                    <a href="{{ url('/Events')}}" class="nav-item nav-link">Events</a>
                    <a href="{{ url('/Contact')}}" class="nav-item nav-link">Contact</a>
                </div>

                <div class="btn-search btn btn-primary btn-md-square cart me-4 rounded-circle d-none d-lg-inline-flex cart-btn"><a href="{{ url('/Cart')}}"><i class="fas fa-shopping-cart"></i><span id="cart-count">0</span></a></div>

                <div class="nav-item dropdown btn-search btn btn-primary btn-md-square me-4 rounded-circle d-none d-lg-inline-flex">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-user"></i></a>
                    <div class="dropdown-menu bg-light">
                        <a class="dropdown-item">{{ Auth::user()->name }}</a>
                        <a href="{{ url('/profile-edit')}}" class="dropdown-item"><i class="fas fa-user-circle"></i>{{ __('Profile') }}</a>
                        <a href="{{ url('/OrderHistory')}}" class="dropdown-item"><i class="fab fa-first-order-alt"></i>My Orders</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();" class="dropdown-item"><i class="fas fa-sign-out-alt"></i>{{ __('Log Out') }}</a>
                        </form>
                    </div>
                </div>
                <a href="{{ url('/Book')}}" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block rounded-pill">Book Now</a>
            </div>
        </nav>
    </div>
</div>