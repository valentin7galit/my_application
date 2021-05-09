<!-- Menu -->
<div class="container py-3 bg-white">
    <div class="navbar navbar-expand-lg navbar-light p-0">
        <!-- Logo -->
        <a class="navbar-brand" href="index.html">
            <img src="./img/logo.png" class="logo-img" alt="Logo">
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
                        <a class="nav-link down-hyperlink" href="./pages/men.html">Men</a>
                        <a class="nav-link down-hyperlink" href="./pages/women.html">Women</a>
                        <a class="nav-link down-hyperlink" href="./pages/kids.html">Kids</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./blocks/about.html">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./blocks/terms_and_conditions.html">Terms and Conditions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./pages/blog.html">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                </li>
            </ul>
        </div>
        <!-- Social Media -->
        <a href="https://www.facebook.com/" class="link-social-media text-secondary" target="blank">
            <i class="fab fa-facebook-square pl-2 border-left border-secondary"></i>
        </a>
    </div>
</div>