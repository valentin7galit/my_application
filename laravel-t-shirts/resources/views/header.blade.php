<!-- Menu -->
<div class="container py-3 bg-white">
    <div class="navbar navbar-expand-lg navbar-light p-0">
        <!-- Logo -->
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('img/logo.png') }}" class="logo-img" alt="Logo">
            <span class="align-middle">T-shirts</span>
        </a>
        <!-- Menu Mobile -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHamburger">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Menu List -->
        <div class="collapse navbar-collapse" id="navbarHamburger">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown" role="button" data-toggle="dropdown">Products</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown">
                        <a class="nav-link down-hyperlink" href="{{ url('/products/mens') }}">Men's</a>
                        <a class="nav-link down-hyperlink" href="{{ url('/products/women') }}">Women</a>
                        <a class="nav-link down-hyperlink" href="{{ url('/products/kids') }}">Kids</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about-us') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/terms-and-conditions') }}">Terms and Conditions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/wishlist') }}" class="nav-link">
                        <i class="fas fa-heart"></i> Wishlist 
                        {{-- Number wishlist count for Vue --}}
                        <wishlist-count></wishlist-count>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/cart') }}" class="button-cart btn btn-outline-secondary">
                        <i class="fas fa-shopping-cart"></i> Cart 
                        {{-- Number cart count for Vue --}}
                        <cart-count></cart-count>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>