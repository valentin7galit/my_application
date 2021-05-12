@extends('layouts')

@section('title')
    About Us
@endsection

@section('content')
    <div class="container py-3 bg-white">
        <!-- About Us -->
        <h1 class="text-center py-2">About Us</h1>
        <p class="text-center">Our mission is to equip people to make a difference in the world. We do this by creating outstanding products. We demonstrate this philosophy across all facets of our company from our products to our employee involvement in our communities.</p>
        <div class="row">
            <div class="col-lg-4">
                <div>
                    <img src="{{ asset('img/gallery-1.jpg') }}" alt="Gallery 1" class="w-100 mb-2 mb-md-4 rounded gallery-imgs" onclick="zoomGallery(this)">
                </div>
                <div>
                    <img src="{{ asset('img/gallery-2.jpg') }}" alt="Gallery 1.2" class="w-100 mb-2 mb-md-4 rounded gallery-imgs" onclick="zoomGallery(this)">
                </div>
            </div>
            <div class="col-lg-4">
                <div>
                    <img src="{{ asset('img/gallery-3.jpg') }}" alt="Gallery 2" class="w-100 mb-2 mb-md-4 rounded gallery-imgs" onclick="zoomGallery(this)">
                </div>
                <div>
                    <img src="{{ asset('img/gallery-4.jpg') }}" alt="Gallery 2.2" class="w-100 mb-2 mb-md-4 rounded gallery-imgs" onclick="zoomGallery(this)">
                </div>
            </div>
            <div class="col-lg-4">
                <div>
                    <img src="{{ asset('img/gallery-5.jpg') }}" alt="Gallery 3" class="w-100 mb-2 mb-md-4 rounded gallery-imgs" onclick="zoomGallery(this)">
                </div>
                <div>
                    <img src="{{ asset('img/gallery-6.jpg') }}" alt="Gallery 3.2" class="w-100 mb-2 mb-md-4 rounded gallery-imgs" onclick="zoomGallery(this)">
                </div>
            </div>
        </div>
        <!--Zoom & Close-->
        <div class="block-zoom-img w-100">
            <span class="close text-white" onclick="this.parentElement.style.display='none'">&times;</span>
            <img id="zoom-img" class="w-100 mb-2 mb-md-4 rounded container zoom-gallery-img"> 
        </div>
        <!-- Our Team -->
        <h3 class="text-center py-2">Our Team</h3>
        <p class="text-center">We are a team of specialists who combine knowledge and experience with enthusiasm, passion and creativity. This blend helps us to effectively create and promote meticulously prepared, captivating and precisely optimized content to help our customers make the best choice in t-shirts.</p>
        <div class="row">
            <div class="col-lg-4 text-center py-2">
                <img src="{{ asset('img/team-1.jpg') }}" alt="Profile 1" class="rounded-circle" width="200" height="200">
                <p></p>
                <h4>Valentin Galit</h4>
                <h5>developer</h5>
                <p class="font-italic">I develop the website, in particular I develop the programming source code, the optimization of databases and markup languages.</p>
                <p>valentin7galit@gmail.com / <span>068297577</span></p>
                <a href="https://www.facebook.com/" target="blanck" class="text-decor link-color">
                    <i class="fab fa-facebook-f h3 px-2"></i>
                </a>
                <a href="https://www.instagram.com/" target="blanck" class="text-decor link-color">
                    <i class="fab fa-instagram h3 px-2"></i>
                </a>
                <a href="https://twitter.com/" target="blanck" class="text-decor link-color">
                    <i class="fab fa-twitter h3 px-2"></i>
                </a>
                <a href="https://www.linkedin.com/" target="blanck" class="text-decor link-color">
                    <i class="fab fa-linkedin-in h3 px-2"></i>
                </a>
            </div>
            <div class="col-lg-4 text-center py-2">
                <img src="{{ asset('img/team-2.jpg') }}" alt="Profile 2" class="rounded-circle" width="200" height="200">
                <p></p>
                <h4>Maria Rusu</h4>
                <h5>manager</h5>
                <p class="font-italic">I coordinate two units and establish the distribution of human and material resources according to the established objectives.</p>
                <p>mariarusu@gmail.com / <span>068294524</span></p>
                <a href="https://www.facebook.com/" target="blanck" class="text-decor link-color">
                    <i class="fab fa-facebook-f h3 px-2"></i>
                </a>
                <a href="https://www.instagram.com/" target="blanck" class="text-decor link-color">
                    <i class="fab fa-instagram h3 px-2"></i>
                </a>
                <a href="https://twitter.com/" target="blanck" class="text-decor link-color">
                    <i class="fab fa-twitter h3 px-2"></i>
                </a>
                <a href="https://www.linkedin.com/" target="blanck" class="text-decor link-color">
                    <i class="fab fa-linkedin-in h3 px-2"></i>
                </a>
            </div>
            <div class="col-lg-4 text-center py-2">
                <img src="{{ asset('img/team-3.jpg') }}" alt="Profile 3" class="rounded-circle" width="200" height="200">
                <p></p>
                <h4>Alina Ceobanu</h4>
                <h5>designer</h5>
                <p class="font-italic">I work on sketching and creating new models of clothing. Create new stylistic concepts and unique t-shirt designs.</p>
                <p>alinaceobanu@gmail.com / <span>068294575</span></p>
                <a href="https://www.facebook.com/" target="blanck" class="text-decor link-color">
                    <i class="fab fa-facebook-f h3 px-2"></i>
                </a>
                <a href="https://www.instagram.com/" target="blanck" class="text-decor link-color">
                    <i class="fab fa-instagram h3 px-2"></i>
                </a>
                <a href="https://twitter.com/" target="blanck" class="text-decor link-color">
                    <i class="fab fa-twitter h3 px-2"></i>
                </a>
                <a href="https://www.linkedin.com/" target="blanck" class="text-decor link-color">
                    <i class="fab fa-linkedin-in h3 px-2"></i>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('footerScripts')
    <script src="{{ mix('js/about_gallery.js') }}"></script>
@endsection