<!-- Footer -->
<div class="container pt-3 bg-white">
    <div class="row bg-secondary py-5">
        <div class="col-lg-3 col-6">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" class="footer-logo">
                <span class="align-middle h3 cl-black">T-shirts</span>
            </a>
        </div>
        <div class="col-lg-3 col-6">
            <h2>Products</h2>
            <p>
                <a href="{{ url('/products/mens') }}" class="text-dark text-decor">Men's</a>
            </p>
            <p>
                <a href="{{ url('/products/women') }}" class="text-dark text-decor">Women</a>
            </p>
            <p>
                <a href="{{ url('/products/kids') }}" class="text-dark text-decor">Kids</a>
            </p>
        </div>
        <div class="col-lg-3 col-6">
            <h2>Information</h2>
            <p>
                <a href="{{ url('/about-us') }}" class="text-dark text-decor">About Up</a>
            </p>
            <p>
                <a href="{{ url('/terms-and-conditions') }}" class="text-dark text-decor">Terms and Conditions</a>
            </p>
            <p>
                <a href="{{ url('/blog') }}" class="text-dark text-decor">Blog</a>
            </p>
            <p>
                <a href="{{ url('/contact') }}" class="text-dark text-decor">Contact</a>
            </p>  
        </div>
        <div class="col-lg-3 col-6">
            <h2>Find us on</h2>
            <a href="https://www.facebook.com/" target="blanck" class="text-decor text-dark">
                <i class="fab fa-facebook-f h3"></i>
                <span>Facebook</span>
            </a><br>
            <a href="https://www.instagram.com/" target="blanck" class="text-decor text-dark">
                <i class="fab fa-instagram h3"></i>
                <span>Instagram</span>
            </a><br>
            <a href="https://twitter.com/" target="blanck" class="text-decor text-dark">
                <i class="fab fa-twitter h3"></i>
                <span>Twitter</span>
            </a>
        </div>
    </div>
    <div class="row bg-dark py-4">
        <div class="col">
            <p class="text-center text-secondary">?? T-shirts SE, 2021. All Rights Reserved.</p>
        </div>
    </div>
</div>