@extends('layouts')

@section('title')
    T-shirts.com | Forever with you
@endsection

@section('content')
    <!-- Home Slider -->
    <div class="container py-3 px-0 bg-white">
        <div id="carousel-ind" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-ind" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-ind" data-slide-to="1"></li>
                <li data-target="#carousel-ind" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('img/slider-1.jpg') }}" alt="Slider Men">
                    <div class="carousel-caption">
                        <h1 class="a">Are you looking for something <span class="text-hidden">new</span> ?</h1>
                        <a href="{{ url('/products/mens') }}" class="btn btn-outline-light">CLICK HERE</a>
                        <!-- Paragraph Null -->
                        <p class="space-down"></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/slider-2.jpg') }}" alt="Slider Women">
                    <div class="carousel-caption">
                        <h1>Not sure how to choose ?</h1>
                        <a href="{{ url('/products/women') }}" class="btn btn-outline-light">CLICK HERE</a>
                        <!-- Paragraph Null -->
                        <p class="space-down"></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/slider-3.jpg') }}" alt="Slider Kids">
                    <div class="carousel-caption">
                        <h1>Are you ready for the new year ?</h1>
                        <a href="{{ url('/products/mens') }}" class="btn btn-outline-light">CLICK HERE</a>
                        <!-- Paragraph Null -->
                        <p class="space-down"></p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-ind" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-ind" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- Our Process -->
    <div class="container py-3 bg-white">
        <h1 class="text-center py-2">Our Process</h1>
        <div class="row">
            <div class="col-lg-5 col-12">
                <img class="w-100 process-img" src="{{ asset('img/process.jpg') }}" alt="Process">
            </div>
            <div class="col-lg-7 col-12 text-proces">
                <p>The direct-to-garment printing process operates much like an ink-jet printer you might have at home. DTG prints ink directly onto the t-shirt and can produce full-color images with accuracy.</p>
                <p>Direct-to-garment printing produces quality printing on par with screen printing and better than heat transfers. Because it operates just like an ink-jet printer.</p>
                <p>Choosing a quality t-shirt encompasses several factors, including fit, sizing, material, softness, and weight. A great starting point for determining which blank t-shirt to use is to check out T-Shirt Magazine Online’s review of some of the most popular blank t-shirts for printing.</p>
                <p>The next most important factor in the success and sustainability of the online t-shirt company is quality.</p>
            </div>
        </div>
    </div>
    <!-- Recent Products -->
    <div class="container py-3 bg-white">
        <h1 class="text-center py-2">Recent Products</h1>
        <div class="carousel-relative"></div>
        <div id="carousel-product-recent" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        @foreach ($recents->slice(0, 2) as $product)
                            <div class="col-lg-3 col-6 py-3">
                                <a href="/products/{{ $product->id }}">
                                    <div class="img-cart">
                                        <img src="{{ $product->product_images->path }}" alt="{{ $product->product_images->name }}" class="w-100 products-img">
                                        <div class="p-2 block-cart">
                                            <a href="#" class="btn btn-secondary btn-block">Add to Cart</a>
                                        </div>
                                    </div>
                                </a>
                                <div class="row py-2">
                                    <div class="col-sm-8 col-7">
                                        <h5 class="">
                                            <a href="/products/{{ $product->id }}" class="products-link">{{ $product->name }}</a>
                                        </h5>
                                    </div>
                                    <div class="col-sm-4 col-5">
                                        <h5 class="text-right">{{ $product->currency }}{{ $product->price }}</h5>
                                    </div>
                                </div>
                                <div class="border-top border-dark">
                                    <p class="text-secondary m-0 py-2">{{ $product->short_description }}</p>
                                </div>
                                <div class="row">
                                    <div class="col-sm-7 col-12">
                                        @if ($product->rating === 1)
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        @endif
                                        @if ($product->rating === 2)
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        @endif
                                        @if ($product->rating === 3)
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        @endif
                                        @if ($product->rating === 4)
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        @endif
                                        @if ($product->rating === 5)
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        @endif
                                    </div>
                                    <div class="col-sm-5 col-12">
                                        <p class="text-secondary font-italic product-text">{{ $product->published_at }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @foreach ($recents->slice(2, 2) as $product)
                            <div class="product-none-carousel col-lg-3 col-6 py-3">
                                <a href="/products/{{ $product->id }}">
                                    <div class="img-cart">
                                        <img src="{{ $product->product_images->path }}" alt="{{ $product->product_images->name }}" class="w-100 products-img">
                                        <div class="p-2 block-cart">
                                            <a href="#" class="btn btn-secondary btn-block">Add to Cart</a>
                                        </div>
                                    </div>
                                </a>
                                <div class="row py-2">
                                    <div class="col-sm-8 col-7">
                                        <h5 class="">
                                            <a href="/products/{{ $product->id }}" class="products-link">{{ $product->name }}</a>
                                        </h5>
                                    </div>
                                    <div class="col-sm-4 col-5">
                                        <h5 class="text-right">{{ $product->currency }}{{ $product->price }}</h5>
                                    </div>
                                </div>
                                <div class="border-top border-dark">
                                    <p class="text-secondary m-0 py-2">{{ $product->short_description }}</p>
                                </div>
                                <div class="row">
                                    <div class="col-sm-7 col-12">
                                        @if ($product->rating === 1)
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        @endif
                                        @if ($product->rating === 2)
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        @endif
                                        @if ($product->rating === 3)
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        @endif
                                        @if ($product->rating === 4)
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        @endif
                                        @if ($product->rating === 5)
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        @endif
                                    </div>
                                    <div class="col-sm-5 col-12">
                                        <p class="text-secondary font-italic product-text">{{ $product->published_at }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        @foreach ($recents->slice(4, 2) as $product)
                            <div class="col-lg-3 col-6 py-3">
                                <a href="/products/{{ $product->id }}">
                                    <div class="img-cart">
                                        <img src="{{ $product->product_images->path }}" alt="{{ $product->product_images->name }}" class="w-100 products-img">
                                        <div class="p-2 block-cart">
                                            <a href="#" class="btn btn-secondary btn-block">Add to Cart</a>
                                        </div>
                                    </div>
                                </a>
                                <div class="row py-2">
                                    <div class="col-sm-8 col-7">
                                        <h5 class="">
                                            <a href="/products/{{ $product->id }}" class="products-link">{{ $product->name }}</a>
                                        </h5>
                                    </div>
                                    <div class="col-sm-4 col-5">
                                        <h5 class="text-right">{{ $product->currency }}{{ $product->price }}</h5>
                                    </div>
                                </div>
                                <div class="border-top border-dark">
                                    <p class="text-secondary m-0 py-2">{{ $product->short_description }}</p>
                                </div>
                                <div class="row">
                                    <div class="col-sm-7 col-12">
                                        @if ($product->rating === 1)
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        @endif
                                        @if ($product->rating === 2)
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        @endif
                                        @if ($product->rating === 3)
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        @endif
                                        @if ($product->rating === 4)
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        @endif
                                        @if ($product->rating === 5)
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        @endif
                                    </div>
                                    <div class="col-sm-5 col-12">
                                        <p class="text-secondary font-italic product-text">{{ $product->published_at }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @foreach ($recents->slice(6, 2) as $product)
                            <div class="product-none-carousel col-lg-3 col-6 py-3">
                                <a href="/products/{{ $product->id }}">
                                    <div class="img-cart">
                                        <img src="{{ $product->product_images->path }}" alt="{{ $product->product_images->name }}" class="w-100 products-img">
                                        <div class="p-2 block-cart">
                                            <a href="#" class="btn btn-secondary btn-block">Add to Cart</a>
                                        </div>
                                    </div>
                                </a>
                                <div class="row py-2">
                                    <div class="col-sm-8 col-7">
                                        <h5 class="">
                                            <a href="/products/{{ $product->id }}" class="products-link">{{ $product->name }}</a>
                                        </h5>
                                    </div>
                                    <div class="col-sm-4 col-5">
                                        <h5 class="text-right">{{ $product->currency }}{{ $product->price }}</h5>
                                    </div>
                                </div>
                                <div class="border-top border-dark">
                                    <p class="text-secondary m-0 py-2">{{ $product->short_description }}</p>
                                </div>
                                <div class="row">
                                    <div class="col-sm-7 col-12">
                                        @if ($product->rating === 1)
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        @endif
                                        @if ($product->rating === 2)
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        @endif
                                        @if ($product->rating === 3)
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        @endif
                                        @if ($product->rating === 4)
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        @endif
                                        @if ($product->rating === 5)
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        @endif
                                    </div>
                                    <div class="col-sm-5 col-12">
                                        <p class="text-secondary font-italic product-text">{{ $product->published_at }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div> 
            </div>
            <div class="container carousel-absolute">
                <div class="row">
                    <div class="col-lg-5 col-3"></div>
                    <div class="col-lg-1 col-3 text-center">
                        <a href="#carousel-product-recent" data-slide="prev">
                            <span class="btn btn-outline-secondary">
                                <i class="fas fa-chevron-left fa-2x align-middle"></i>
                            </span>
                        </a>
                    </div>
                    <div class="col-lg-1 col-3 text-center">
                        <a href="#carousel-product-recent" data-slide="next">
                            <span class="btn btn-outline-secondary">
                                <i class="fas fa-chevron-right fa-2x align-middle"></i>
                            </span>
                        </a>
                    </div>
                    <div class="col-lg-5 col-3"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us -->
    <div class="container py-3 bg-white">
        <h1 class="text-center py-2">About Us</h1>
        <div class="row">
            <div class="col-md-4 col-12 text-center">
                <i class="fas fa-shopping-cart icon-size"></i>
                <h4>Online Shop</h4>
                <p>T-shirts.com presents product lines for men, women and children, which produces t-shirts. It offers you the range of products suitable for any event, wherever you are.</p>
            </div>
            <div class="col-md-4 col-12 text-center">
                <i class="fas fa-truck icon-size"></i>
                <h4>Delivery</h4>
                <p>The store delivers for free in Chisinau. T-shirts can be bought with delivery in any city in Moldova through the courier service. Delivery in Moldova is made by the company Muvi Express.</p>
            </div>
            <div class="col-md-4 col-12 text-center">
                <i class="far fa-handshake icon-size"></i>
                <h4>Products</h4>
                <p>The widest range of t-shirt products for men, women and children are available. Viewing and accessing products is available for customer optics and is done online.</p>
            </div>
        </div>
    </div>
    <!-- Popular Products -->
    <div class="container py-3 bg-white slider">
        <h1 class="text-center py-2">Popular Products</h1>
        <!-- Arrow buttons -->
        <div class="row">
            <div class="col-lg-5 col-3"></div>
            <div class="col-lg-1 col-3 text-center">
                <a class="previous" onclick="previous()">
                    <span class="btn btn-outline-secondary">
                        <i class="fas fa-chevron-left fa-2x align-middle"></i>
                    </span>
                </a>
            </div>
            <div class="col-lg-1 col-3 text-center">
                <a class="next" onclick="next()">
                    <span class="btn btn-outline-secondary">
                        <i class="fas fa-chevron-right fa-2x align-middle"></i>
                    </span>
                </a>
            </div>
            <div class="col-lg-5 col-3"></div>
        </div>
        <!-- Cards products -->
        <div class="">
            <div id="item-1" class="row item"></div>
            <div id="item-2" class="row item"></div>
        </div>
    </div>
    <!-- Contact -->
    <div class="container py-3 px-0 bg-white">
        <h1 class="text-center py-2">Contact</h1>
        <div class="text-center contact-bg-img" style="background-image: url('{{ asset('img/contact.jpg') }}');">
            <h4 class="text-white">Need to get in touch with the team? We're all ears.</h4>
            <a href="{{ url('/contact') }}" class="btn btn-outline-light">Contact Us</a>
        </div>
    </div>
    <!-- Manufacturers -->
    <div class="container py-3 bg-white">
        <h1 class="text-center py-2">Our Manufacturers</h1>
        <div class="row">
            <img src="{{ asset('img/manufacturers-1.png') }}" alt="Manufacturers 1" class="col-lg-3 col-6 manufactur-img">
            <img src="{{ asset('img/manufacturers-2.png') }}" alt="Manufacturers 2" class="col-lg-3 col-6 manufactur-img">
            <img src="{{ asset('img/manufacturers-3.png') }}" alt="Manufacturers 3" class="col-lg-3 col-6 manufactur-img">
            <img src="{{ asset('img/manufacturers-4.png') }}" alt="Manufacturers 4" class="col-lg-3 col-6 manufactur-img">
        </div>
    </div>
@endsection

@section('footerScripts')
    <script src="{{ mix('js/app.js') }}"></script>

    <script type="text/javascript">
        let index = 1;

        showSlides(index);

        function next() {
            showSlides(index += 1);
        }

        function previous() {
            showSlides(index -= 1);  
        }

        function current(n) {
            showSlides(index = n);
        }

        function showSlides(n) {
            let slides = document.getElementsByClassName("item");

            if (n > slides.length) {
                index = 1;
            }
            if (n < 1) {
                index = slides.length;
            }

            for (let slide of slides) {
                slide.style.display = "none";
            }

            slides[index - 1].style.display = "flex";    
        }
    </script>
@endsection
