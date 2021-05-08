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
                    <img class="d-block w-100" src="./img/slider-1.jpg" alt="Slider Men">
                    <div class="carousel-caption">
                        <h1 class="a">Are you looking for something <span class="text-hidden">new</span> ?</h1>
                        <a href="./pages/men.html" class="btn btn-outline-light">CLICK HERE</a>
                        <!-- Paragraph Null -->
                        <p class="space-down"></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./img/slider-2.jpg" alt="Slider Women">
                    <div class="carousel-caption">
                        <h1>Not sure how to choose ?</h1>
                        <a href="./pages/women.html" class="btn btn-outline-light">CLICK HERE</a>
                        <!-- Paragraph Null -->
                        <p class="space-down"></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./img/slider-3.jpg" alt="Slider Kids">
                    <div class="carousel-caption">
                        <h1>Are you ready for the new year ?</h1>
                        <a href="./pages/kids.html" class="btn btn-outline-light">CLICK HERE</a>
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
                <img class="w-100 process-img" src="./img/process.jpg" alt="Process">
            </div>
            <div class="col-lg-7 col-12 text-proces">
                <p>The direct-to-garment printing process operates much like an ink-jet printer you might have at home. DTG prints ink directly onto the t-shirt and can produce full-color images with accuracy.</p>
                <p>Direct-to-garment printing produces quality printing on par with screen printing and better than heat transfers. Because it operates just like an ink-jet printer.</p>
                <p>Choosing a quality t-shirt encompasses several factors, including fit, sizing, material, softness, and weight. A great starting point for determining which blank t-shirt to use is to check out T-Shirt Magazine Online’s review of some of the most popular blank t-shirts for printing.</p>
                <p>The next most important factor in the success and sustainability of the online t-shirt company is quality.</p>
            </div>
        </div>
    </div>
    <!-- Popular Products -->
    <div class="container py-3 bg-white">
        <h1 class="text-center py-2">Popular Products</h1>
        <div class="carousel-relative"></div>
        <div id="carousel-product-pop" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-lg-3 col-6 py-3" data-popular="3">
                            <a href="./pages/sing_product.html">
                                <div class="img-cart">
                                    <img src="./img/products/men-01.jpg" alt="Products" class="w-100 products-img">
                                    <div class="p-2 block-cart">
                                        <a href="./pages/sing_product.html" class="btn btn-secondary btn-block">Add to Cart</a>
                                    </div>
                                </div>
                            </a>
                            <div class="row py-2">
                                <div class="col-sm-8 col-7">
                                    <h5 class="">
                                        <a href="../" class="products-link">SQL Database</a>
                                    </h5>
                                </div>
                                <div class="col-sm-4 col-5">
                                    <h5 class="text-right">$16.95</h5>
                                </div>
                            </div>
                            <div class="border-top border-dark">
                                <p class="text-secondary m-0 py-2">Essential T-Shirt, designed by EQDesigns</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-7 col-12">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="col-sm-5 col-12">
                                    <p class="text-secondary font-italic product-text">25.04.2021</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6 py-3 " data-popular="2">
                            <a href="../">
                                <div class="img-cart">
                                    <img src="./img/products/men-02.jpg" alt="Products" class="w-100 products-img">
                                    <div class="p-2 block-cart">
                                        <a href="../" class="btn btn-secondary btn-block">Add to Cart</a>
                                    </div>
                                </div>
                            </a>
                            <div class="row py-2">
                                <div class="col-sm-8 col-7">
                                    <h5 class="">
                                        <a href="../" class="products-link">My Model is ...</a>
                                    </h5>
                                </div>
                                <div class="col-sm-4 col-5">
                                    <h5 class="text-right">$9.63</h5>
                                </div>
                            </div>
                            <div class="border-top border-dark">
                                <p class="text-secondary m-0 py-2">Classic T-Shirt, designed by FunnyGrief</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-7 col-12">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="col-sm-5 col-12">
                                    <p class="text-secondary font-italic product-text">21.04.2021</p>
                                </div>
                            </div>
                        </div>
                        <div class="product-none-carousel col-lg-3 col-6 py-3" data-popular="5">
                            <a href="../">
                                <div class="img-cart">
                                    <img src="./img/products/men-03.jpg" alt="Products" class="w-100 products-img">
                                    <div class="p-2 block-cart">
                                        <a href="../" class="btn btn-secondary btn-block">Add to Cart</a>
                                    </div>
                                </div>
                            </a>
                            <div class="row py-2">
                                <div class="col-sm-8 col-7">
                                    <h5 class="">
                                        <a href="../" class="products-link">Full-Stack Devel.</a>
                                    </h5>
                                </div>
                                <div class="col-sm-4 col-5">
                                    <h5 class="text-right">$12.35</h5>
                                </div>
                            </div>
                            <div class="border-top border-dark">
                                <p class="text-secondary m-0 py-2">Essential T-Shirt, designed by YourGeekside</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-7 col-12">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="col-sm-5 col-12">
                                    <p class="text-secondary font-italic product-text">22.04.2021</p>
                                </div>
                            </div>
                        </div>
                        <div class="product-none-carousel col-lg-3 col-6 py-3" data-popular="4">
                            <a href="../">
                                <div class="img-cart">
                                    <img src="./img/products/men-04.jpg" alt="Products" class="w-100 products-img">
                                    <div class="p-2 block-cart">
                                        <a href="../" class="btn btn-secondary btn-block">Add to Cart</a>
                                    </div>
                                </div>
                            </a>
                            <div class="row py-2">
                                <div class="col-sm-8 col-7">
                                    <h5 class="">
                                        <a href="../" class="products-link">Don't Worry We'll</a>
                                    </h5>
                                </div>
                                <div class="col-sm-4 col-5">
                                    <h5 class="text-right">$21.95</h5>
                                </div>
                            </div>
                            <div class="border-top border-dark">
                                <p class="text-secondary m-0 py-2">Classic T-Shirt, designed by DenisnRour</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-7 col-12">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="col-sm-5 col-12">
                                    <p class="text-secondary font-italic product-text">23.04.2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-lg-3 col-6 py-3" data-popular="4">
                            <a href="../">
                                <div class="img-cart">
                                    <img src="./img/products/men-05.jpg" alt="Products" class="w-100 products-img">
                                    <div class="p-2 block-cart">
                                        <a href="../" class="btn btn-secondary btn-block">Add to Cart</a>
                                    </div>
                                </div>
                            </a>
                            <div class="row py-2">
                                <div class="col-sm-8 col-7">
                                    <h5 class="">
                                        <a href="../" class="products-link">Vintage SQL Log</a>
                                    </h5>
                                </div>
                                <div class="col-sm-4 col-5">
                                    <h5 class="text-right">$18.95</h5>
                                </div>
                            </div>
                            <div class="border-top border-dark">
                                <p class="text-secondary m-0 py-2">Essential T-Shirt, designed by Vladocar</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-7 col-12">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="col-sm-5 col-12">
                                    <p class="text-secondary font-italic product-text">19.04.2021</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6 py-3" data-popular="3">
                            <a href="../">
                                <div class="img-cart">
                                    <img src="./img/products/men-06.jpg" alt="Products" class="w-100 products-img">
                                    <div class="p-2 block-cart">
                                        <a href="../" class="btn btn-secondary btn-block">Add to Cart</a>
                                    </div>
                                </div>
                            </a>
                            <div class="row py-2">
                                <div class="col-sm-8 col-7">
                                    <h5 class="">
                                        <a href="../" class="products-link">I Am A Database</a>
                                    </h5>
                                </div>
                                <div class="col-sm-4 col-5">
                                    <h5 class="text-right">$10.25</h5>
                                </div>
                            </div>
                            <div class="border-top border-dark">
                                <p class="text-secondary m-0 py-2">Classic T-Shirt, designed by TKUP22</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-7 col-12">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="col-sm-5 col-12">
                                    <p class="text-secondary font-italic product-text">24.04.2021</p>
                                </div>
                            </div>
                        </div>
                        <div class="product-none-carousel col-lg-3 col-6 py-3" data-popular="4">
                            <a href="../">
                                <div class="img-cart">
                                    <img src="./img/products/men-07.jpg" alt="Products" class="w-100 products-img">
                                    <div class="p-2 block-cart">
                                        <a href="../" class="btn btn-secondary btn-block">Add to Cart</a>
                                    </div>
                                </div>
                            </a>
                            <div class="row py-2">
                                <div class="col-sm-8 col-7">
                                    <h5 class="">
                                        <a href="../" class="products-link">I U25A1 Unicode</a>
                                    </h5>
                                </div>
                                <div class="col-sm-4 col-5">
                                    <h5 class="text-right">$7.72</h5>
                                </div>
                            </div>
                            <div class="border-top border-dark">
                                <p class="text-secondary m-0 py-2">Classic T-Shirt, designed by ThomaseSmith</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-7 col-12">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="col-sm-5 col-12">
                                    <p class="text-secondary font-italic product-text">20.04.2021</p>
                                </div>
                            </div>
                        </div>
                        <div class="product-none-carousel col-lg-3 col-6 py-3" data-popular="5">
                            <a href="../">
                                <div class="img-cart">
                                    <img src="./img/products/men-08.jpg" alt="Products" class="w-100 products-img">
                                    <div class="p-2 block-cart">
                                        <a href="../" class="btn btn-secondary btn-block">Add to Cart</a>
                                    </div>
                                </div>
                            </a>
                            <div class="row py-2">
                                <div class="col-8">
                                    <h5 class="">
                                        <a href="../" class="products-link">Database Ninja</a>
                                    </h5>
                                </div>
                                <div class="col-4">
                                    <h5 class="text-right">$24.15</h5>
                                </div>
                            </div>
                            <div class="border-top border-dark">
                                <p class="text-secondary m-0 py-2">Graphic T-Shirt, designed by OoyootBespredel</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-7 col-12">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="col-sm-5 col-12">
                                    <p class="text-secondary font-italic product-text">24.04.2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="container carousel-absolute">
                <div class="row">
                    <!-- Block Null -->
                    <div class="col-lg-5 col-3"></div>
                    <div class="col-lg-1 col-3 text-center">
                        <a href="#carousel-product-pop" data-slide="prev">
                            <span class="btn btn-outline-secondary">
                                <i class="fas fa-chevron-left fa-2x align-middle"></i>
                            </span>
                        </a>
                    </div>
                    <div class="col-lg-1 col-3 text-center">
                        <a href="#carousel-product-pop" data-slide="next">
                            <span class="btn btn-outline-secondary">
                                <i class="fas fa-chevron-right fa-2x align-middle"></i>
                            </span>
                        </a>
                    </div>
                    <!-- Block Null -->
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
    <!-- Recent Products -->
    <div class="container py-3 bg-white">
        <h1 class="text-center py-2">Recent Products</h1>
        <div class="carousel-relative"></div>
        <div id="carousel-product-recent" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-lg-3 col-6 py-3" data-time="2021.0425">
                            <a href="./pages/sing_product.html">
                                <div class="img-cart">
                                    <img src="./img/products/men-01.jpg" alt="Products" class="w-100 products-img">
                                    <div class="p-2 block-cart">
                                        <a href="./pages/sing_product.html" class="btn btn-secondary btn-block">Add to Cart</a>
                                    </div>
                                </div>
                            </a>
                            <div class="row py-2">
                                <div class="col-sm-8 col-7">
                                    <h5 class="">
                                        <a href="../" class="products-link">SQL Database</a>
                                    </h5>
                                </div>
                                <div class="col-sm-4 col-5">
                                    <h5 class="text-right">$16.95</h5>
                                </div>
                            </div>
                            <div class="border-top border-dark">
                                <p class="text-secondary m-0 py-2">Essential T-Shirt, designed by EQDesigns</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-7 col-12">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="col-sm-5 col-12">
                                    <p class="text-secondary font-italic product-text">25.04.2021</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6 py-3 " data-time="2021.0421">
                            <a href="../">
                                <div class="img-cart">
                                    <img src="./img/products/men-02.jpg" alt="Products" class="w-100 products-img">
                                    <div class="p-2 block-cart">
                                        <a href="../" class="btn btn-secondary btn-block">Add to Cart</a>
                                    </div>
                                </div>
                            </a>
                            <div class="row py-2">
                                <div class="col-sm-8 col-7">
                                    <h5 class="">
                                        <a href="../" class="products-link">My Model is ...</a>
                                    </h5>
                                </div>
                                <div class="col-sm-4 col-5">
                                    <h5 class="text-right">$9.63</h5>
                                </div>
                            </div>
                            <div class="border-top border-dark">
                                <p class="text-secondary m-0 py-2">Classic T-Shirt, designed by FunnyGrief</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-7 col-12">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="col-sm-5 col-12">
                                    <p class="text-secondary font-italic product-text">21.04.2021</p>
                                </div>
                            </div>
                        </div>
                        <div class="product-none-carousel col-lg-3 col-6 py-3" data-time="2021.0422">
                            <a href="../">
                                <div class="img-cart">
                                    <img src="./img/products/men-03.jpg" alt="Products" class="w-100 products-img">
                                    <div class="p-2 block-cart">
                                        <a href="../" class="btn btn-secondary btn-block">Add to Cart</a>
                                    </div>
                                </div>
                            </a>
                            <div class="row py-2">
                                <div class="col-sm-8 col-7">
                                    <h5 class="">
                                        <a href="../" class="products-link">Full-Stack Devel.</a>
                                    </h5>
                                </div>
                                <div class="col-sm-4 col-5">
                                    <h5 class="text-right">$12.35</h5>
                                </div>
                            </div>
                            <div class="border-top border-dark">
                                <p class="text-secondary m-0 py-2">Essential T-Shirt, designed by YourGeekside</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-7 col-12">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="col-sm-5 col-12">
                                    <p class="text-secondary font-italic product-text">22.04.2021</p>
                                </div>
                            </div>
                        </div>
                        <div class="product-none-carousel col-lg-3 col-6 py-3" data-time="2021.0423">
                            <a href="../">
                                <div class="img-cart">
                                    <img src="./img/products/men-04.jpg" alt="Products" class="w-100 products-img">
                                    <div class="p-2 block-cart">
                                        <a href="../" class="btn btn-secondary btn-block">Add to Cart</a>
                                    </div>
                                </div>
                            </a>
                            <div class="row py-2">
                                <div class="col-sm-8 col-7">
                                    <h5 class="">
                                        <a href="../" class="products-link">Don't Worry We'll</a>
                                    </h5>
                                </div>
                                <div class="col-sm-4 col-5">
                                    <h5 class="text-right">$21.95</h5>
                                </div>
                            </div>
                            <div class="border-top border-dark">
                                <p class="text-secondary m-0 py-2">Classic T-Shirt, designed by DenisnRour</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-7 col-12">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="col-sm-5 col-12">
                                    <p class="text-secondary font-italic product-text">23.04.2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-lg-3 col-6 py-3" data-time="2021.0419">
                            <a href="../">
                                <div class="img-cart">
                                    <img src="./img/products/men-05.jpg" alt="Products" class="w-100 products-img">
                                    <div class="p-2 block-cart">
                                        <a href="../" class="btn btn-secondary btn-block">Add to Cart</a>
                                    </div>
                                </div>
                            </a>
                            <div class="row py-2">
                                <div class="col-sm-8 col-7">
                                    <h5 class="">
                                        <a href="../" class="products-link">Vintage SQL Log</a>
                                    </h5>
                                </div>
                                <div class="col-sm-4 col-5">
                                    <h5 class="text-right">$18.95</h5>
                                </div>
                            </div>
                            <div class="border-top border-dark">
                                <p class="text-secondary m-0 py-2">Essential T-Shirt, designed by Vladocar</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-7 col-12">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="col-sm-5 col-12">
                                    <p class="text-secondary font-italic product-text">19.04.2021</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6 py-3" data-time="2021.0424">
                            <a href="../">
                                <div class="img-cart">
                                    <img src="./img/products/men-06.jpg" alt="Products" class="w-100 products-img">
                                    <div class="p-2 block-cart">
                                        <a href="../" class="btn btn-secondary btn-block">Add to Cart</a>
                                    </div>
                                </div>
                            </a>
                            <div class="row py-2">
                                <div class="col-sm-8 col-7">
                                    <h5 class="">
                                        <a href="../" class="products-link">I Am A Database</a>
                                    </h5>
                                </div>
                                <div class="col-sm-4 col-5">
                                    <h5 class="text-right">$10.25</h5>
                                </div>
                            </div>
                            <div class="border-top border-dark">
                                <p class="text-secondary m-0 py-2">Classic T-Shirt, designed by TKUP22</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-7 col-12">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="col-sm-5 col-12">
                                    <p class="text-secondary font-italic product-text">24.04.2021</p>
                                </div>
                            </div>
                        </div>
                        <div class="product-none-carousel col-lg-3 col-6 py-3" data-time="2021.0420">
                            <a href="../">
                                <div class="img-cart">
                                    <img src="./img/products/men-07.jpg" alt="Products" class="w-100 products-img">
                                    <div class="p-2 block-cart">
                                        <a href="../" class="btn btn-secondary btn-block">Add to Cart</a>
                                    </div>
                                </div>
                            </a>
                            <div class="row py-2">
                                <div class="col-sm-8 col-7">
                                    <h5 class="">
                                        <a href="../" class="products-link">I U25A1 Unicode</a>
                                    </h5>
                                </div>
                                <div class="col-sm-4 col-5">
                                    <h5 class="text-right">$7.72</h5>
                                </div>
                            </div>
                            <div class="border-top border-dark">
                                <p class="text-secondary m-0 py-2">Classic T-Shirt, designed by ThomaseSmith</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-7 col-12">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="col-sm-5 col-12">
                                    <p class="text-secondary font-italic product-text">20.04.2021</p>
                                </div>
                            </div>
                        </div>
                        <div class="product-none-carousel col-lg-3 col-6 py-3" data-time="2021.0424">
                            <a href="../">
                                <div class="img-cart">
                                    <img src="./img/products/men-08.jpg" alt="Products" class="w-100 products-img">
                                    <div class="p-2 block-cart">
                                        <a href="../" class="btn btn-secondary btn-block">Add to Cart</a>
                                    </div>
                                </div>
                            </a>
                            <div class="row py-2">
                                <div class="col-8">
                                    <h5 class="">
                                        <a href="../" class="products-link">Database Ninja</a>
                                    </h5>
                                </div>
                                <div class="col-4">
                                    <h5 class="text-right">$24.15</h5>
                                </div>
                            </div>
                            <div class="border-top border-dark">
                                <p class="text-secondary m-0 py-2">Graphic T-Shirt, designed by OoyootBespredel</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-7 col-12">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="col-sm-5 col-12">
                                    <p class="text-secondary font-italic product-text">24.04.2021</p>
                                </div>
                            </div>
                        </div>
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
    <!-- Contact -->
    <div class="container py-3 px-0 bg-white">
        <h1 class="text-center py-2">Contact</h1>
        <div class="text-center contact-bg-img">
            <h4 class="text-white">Need to get in touch with the team? We're all ears.</h4>
            <a href="./pages/contact.html" class="btn btn-outline-light">Contact Us</a>
        </div>
    </div>
    <!-- Manufacturers -->
    <div class="container py-3 bg-white">
        <h1 class="text-center py-2">Our Manufacturers</h1>
        <div class="row">
            <img src="./img/manufacturers-1.png" alt="Manufacturers 1" class="col-lg-3 col-6 manufactur-img">
            <img src="./img/manufacturers-2.png" alt="Manufacturers 2" class="col-lg-3 col-6 manufactur-img">
            <img src="./img/manufacturers-3.png" alt="Manufacturers 3" class="col-lg-3 col-6 manufactur-img">
            <img src="./img/manufacturers-4.png" alt="Manufacturers 4" class="col-lg-3 col-6 manufactur-img">
        </div>
    </div>
@endsection