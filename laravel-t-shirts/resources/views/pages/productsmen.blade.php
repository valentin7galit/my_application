@extends('layouts')

@section('title')
    Men
@endsection

@section('content')
    <div class="container py-3 bg-white">
        <h1 class="py-2">Men's T-shirts</h1>
        <p>The best match starts here. Find everyday active equipment such as t-shirts and lightweight coats designed with the best performance t-shirts technology. Or take to the streets in our collection of life shirts. Whatever your style or color, give it your all in the men's t-shirt collection.</p>
    </div>
    <div class="container filter-position py-3 bg-white">
        <div class="row">
            <div class="col-6 col-lg-9">
                <div class="navbar navbar-expand-lg navbar-light p-0">
                    <!-- Menu Mobile -->
                    <h5 class="filter-mob btn-block btn btn-outline-secondary" data-toggle="collapse" data-target="#1">Refine by</h5>
                    <!-- Filter Large -->
                    <div class="collapse navbar-collapse" id="1">
                        <div class="navbar-nav">
                            <div class="filer-nav nav-item dropdown">
                                <h5 class="btn btn-outline-secondary dropdown-toggle w-100" data-toggle="dropdown">Name</h5>
                                <div class="dropdown-menu m-0">
                                    <div class="pl-4 form-check">
                                        <input class="form-check-input" type="radio" name="Name" id="a" onclick="sortA()">
                                        <label class="form-check-label" for="a">A - Z</label><br>
                                        <input class="form-check-input" type="radio" name="Name" id="z" onclick="sortZ()">
                                        <label class="form-check-label" for="z">Z - A</label><br>
                                        <input class="form-check-input" type="radio" name="Name" id="def" onclick="sortDefault()">
                                        <label class="form-check-label" for="def">Default</label>
                                    </div>
                                </div>
                            </div>
                            <div class="filer-nav nav-item dropdown">
                                <h5 class="btn btn-outline-secondary dropdown-toggle w-100" data-toggle="dropdown">Price</h5>
                                <div class="dropdown-menu m-0">
                                    <div class="pl-4 form-check">
                                        <input class="form-check-input" type="radio" name="Price" id="all" onclick="filterProduct('all')" checked>
                                        <label class="form-check-label" for="all">Show All</label><br>
                                        <input class="form-check-input" type="radio" name="Price" id="0" onclick="filterProduct('price-0'); sortLow();">
                                        <label class="form-check-label" for="0">0$ - 10$</label><br>
                                        <input class="form-check-input" type="radio" name="Price" id="10" onclick="filterProduct('price-10'); sortLow();">
                                        <label class="form-check-label" for="15">10$ - 15$</label><br>
                                        <input class="form-check-input" type="radio" name="Price" id="20" onclick="filterProduct('price-15'); sortLow();">
                                        <label class="form-check-label" for="20">15$ - 20$</label><br>
                                        <input class="form-check-input" type="radio" name="Price" id="30" onclick="filterProduct('price-20'); sortLow();">
                                        <label class="form-check-label" for="25">20$ - 25$</label>
                                    </div>
                                </div>
                            </div>
                            <div class="filer-nav nav-item dropdown">
                                <h5 class="btn btn-outline-secondary dropdown-toggle w-100" data-toggle="dropdown">Size</h5>
                                <div class="dropdown-menu m-0">
                                    <div class="pl-4 form-check">
                                        <input class="form-check-input" type="radio" name="Size" id="all" onclick="filterProduct('all')" checked>
                                        <label class="form-check-label" for="all">Show All</label><br>
                                        <input class="form-check-input" type="radio" name="Size" id="xs" onclick="filterProduct('size-XS')">
                                        <label class="form-check-label" for="xs">XS</label><br>
                                        <input class="form-check-input" type="radio" name="Size" id="s" onclick="filterProduct('size-S')">
                                        <label class="form-check-label" for="s">S</label><br>
                                        <input class="form-check-input" type="radio" name="Size" id="m" onclick="filterProduct('size-M')">
                                        <label class="form-check-label" for="m">M</label><br>
                                        <input class="form-check-input" type="radio" name="Size" id="l" onclick="filterProduct('size-L')">
                                        <label class="form-check-label" for="l">L</label><br>
                                        <input class="form-check-input" type="radio" name="Size" id="xl" onclick="filterProduct('size-XL')">
                                        <label class="form-check-label" for="xl">XL</label>
                                    </div>
                                </div>
                            </div>
                            <div class="filer-nav nav-item dropdown">
                                <h5 class="btn btn-outline-secondary dropdown-toggle w-100" data-toggle="dropdown">Colour</h5>
                                <div class="dropdown-menu m-0">
                                    <div class="pl-4 form-check">
                                        <input class="form-check-input" type="radio" name="Colour" id="all" onclick="filterProduct('all')" checked>
                                        <label class="form-check-label" for="call">Show All</label><br>
                                        <input class="form-check-input" type="radio" name="Colour" id="black" onclick="filterProduct('colour-black')">
                                        <label class="form-check-label" for="black">Black</label><br>
                                        <input class="form-check-input" type="radio" name="Colour" id="gray" onclick="filterProduct('colour-gray')">
                                        <label class="form-check-label" for="gray">Gray</label><br>
                                        <input class="form-check-input" type="radio" name="Colour" id="blue" onclick="filterProduct('colour-blue')">
                                        <label class="form-check-label" for="blue">Blue</label><br>
                                        <input class="form-check-input" type="radio" name="Colour" id="green" onclick="filterProduct('colour-green')">
                                        <label class="form-check-label" for="green">Green</label><br>
                                        <input class="form-check-input" type="radio" name="Colour" id="yellow" onclick="filterProduct('colour-yellow')">
                                        <label class="form-check-label" for="yellow">Yellow</label><br>
                                        <input class="form-check-input" type="radio" name="Colour" id="red" onclick="filterProduct('colour-red')">
                                        <label class="form-check-label" for="red">Red</label><br>
                                        <input class="form-check-input" type="radio" name="Colour" id="white" onclick="filterProduct('colour-white')">
                                        <label class="form-check-label" for="white">White</label><br>
                                        <input class="form-check-input" type="radio" name="Colour" id="multicoloured" onclick="filterProduct('colour-multi-colored')">
                                        <label class="form-check-label" for="multicoloured">Multi-Colored</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="navbar navbar-expand-lg p-0">
                    <div class="navbar-nav w-100">
                        <div class="nav-item dropdown w-100">
                            <h5 class="sort-by-text btn-block btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown">Sort by</h5>
                            <div class="dropdown-menu m-0 w-100">
                                <a class="nav-link link-sort text-secondary" href="#" onclick="sortLow()">Price (Low to High)</a>
                                <a class="nav-link link-sort text-secondary" href="#" onclick="sortHigh()">Price (High to Low)</a>
                                <a class="nav-link link-sort text-secondary" href="#" onclick="sortTime()">Newest In</a>
                                <a class="nav-link link-sort text-secondary" href="#" onclick="sortPopular()">Most Popular</a>
                                <a class="nav-link link-sort text-secondary" href="#" onclick="sortDefault()">Default</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-3 bg-white">
        <div class="row">
            <div class="col-lg-3 col-6 py-3 filterCol price-15 colour-white size-XS size-S size-M size-L size-XL" data-name="sql" data-price="16.95" data-time="21.04" data-popular="3">
                <div>
                    <a href="../">
                        <div class="img-cart">
                            <img src="../img/products/men-01.jpg" alt="Products" class="w-100 products-img">
                            <div class="p-2 block-cart">
                                <a href="../" class="btn btn-secondary btn-block">Add to Cart</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="row py-2">
                    <div class="col-8">
                        <h5 class="">
                            <a href="../" class="products-link">SQL Database</a>
                        </h5>
                    </div>
                    <div class="col-4">
                        <h5 class="text-right">$16.95</h5>
                    </div>
                </div>
                <div class="border-top border-dark">
                    <p class="text-secondary m-0 py-2">Essential T-Shirt, designed by EQDesigns</p>
                </div>
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
            <div class="col-lg-3 col-6 py-3 filterCol price-0 colour-red size-XS size-S size-M size-L" data-name="mym" data-price="9.63" data-time="21.02" data-popular="2">
                <div>
                    <a href="../">
                        <div class="img-cart">
                            <img src="../img/products/men-02.jpg" alt="Products" class="w-100 products-img">
                            <div class="p-2 block-cart">
                                <a href="../" class="btn btn-secondary btn-block">Add to Cart</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="row py-2">
                    <div class="col-8">
                        <h5 class="">
                            <a href="../" class="products-link">My Model is ...</a>
                        </h5>
                    </div>
                    <div class="col-4">
                        <h5 class="text-right">$9.63</h5>
                    </div>
                </div>
                <div class="border-top border-dark">
                    <p class="text-secondary m-0 py-2">Classic T-Shirt, designed by FunnyGrief</p>
                </div>
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
            <div class="col-lg-3 col-6 py-3 filterCol price-10 colour-black size-XS size-S size-L size-XL" data-name="ful" data-price="12.35" data-time="21.02" data-popular="5">
                <div>
                    <a href="../">
                        <div class="img-cart">
                            <img src="../img/products/men-03.jpg" alt="Products" class="w-100 products-img">
                            <div class="p-2 block-cart">
                                <a href="../" class="btn btn-secondary btn-block">Add to Cart</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="row py-2">
                    <div class="col-8">
                        <h5 class="">
                            <a href="../" class="products-link">Full-Stack Dev</a>
                        </h5>
                    </div>
                    <div class="col-4">
                        <h5 class="text-right">$12.35</h5>
                    </div>
                </div>
                <div class="border-top border-dark">
                    <p class="text-secondary m-0 py-2">Essential T-Shirt, designed by YourGeekside</p>
                </div>
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <div class="col-lg-3 col-6 py-3 filterCol price-20 colour-gray size-XS size-S size-M size-L size-XL" data-name="don" data-price="21.95" data-time="21.04" data-popular="4">
                <div>
                    <a href="../">
                        <div class="img-cart">
                            <img src="../img/products/men-04.jpg" alt="Products" class="w-100 products-img">
                            <div class="p-2 block-cart">
                                <a href="../" class="btn btn-secondary btn-block">Add to Cart</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="row py-2">
                    <div class="col-8">
                        <h5 class="">
                            <a href="../" class="products-link">Don't Worry We'll</a>
                        </h5>
                    </div>
                    <div class="col-4">
                        <h5 class="text-right">$21.95</h5>
                    </div>
                </div>
                <div class="border-top border-dark">
                    <p class="text-secondary m-0 py-2">Classic T-Shirt, designed by DenisnRour</p>
                </div>
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
            <div class="col-lg-3 col-6 py-3 filterCol price-15 colour-blue size-S size-M size-L size-XL" data-name="vin" data-price="18.95" data-time="21.04" data-popular="4">
                <div>
                    <a href="../">
                        <div class="img-cart">
                            <img src="../img/products/men-05.jpg" alt="Products" class="w-100 products-img">
                            <div class="p-2 block-cart">
                                <a href="../" class="btn btn-secondary btn-block">Add to Cart</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="row py-2">
                    <div class="col-8">
                        <h5 class="">
                            <a href="../" class="products-link">Vintage SQL Log</a>
                        </h5>
                    </div>
                    <div class="col-4">
                        <h5 class="text-right">$18.95</h5>
                    </div>
                </div>
                <div class="border-top border-dark">
                    <p class="text-secondary m-0 py-2">Essential T-Shirt, designed by Vladocar</p>
                </div>
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
            <div class="col-lg-3 col-6 py-3 filterCol price-10 colour-yellow size-XS size-S size-M size-L size-XL" data-name="iam" data-price="10.25" data-time="21.03" data-popular="3">
                <div>
                    <a href="../">
                        <div class="img-cart">
                            <img src="../img/products/men-06.jpg" alt="Products" class="w-100 products-img">
                            <div class="p-2 block-cart">
                                <a href="../" class="btn btn-secondary btn-block">Add to Cart</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="row py-2">
                    <div class="col-8">
                        <h5 class="">
                            <a href="../" class="products-link">I Am A Database</a>
                        </h5>
                    </div>
                    <div class="col-4">
                        <h5 class="text-right">$10.25</h5>
                    </div>
                </div>
                <div class="border-top border-dark">
                    <p class="text-secondary m-0 py-2">Classic T-Shirt, designed by TKUP22</p>
                </div>
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
            <div class="col-lg-3 col-6 py-3 filterCol price-0 colour-green size-XS size-S size-M size-XL" data-name="iua" data-price="7.72" data-time="21.01" data-popular="4">
                <div>
                    <a href="../">
                        <div class="img-cart">
                            <img src="../img/products/men-07.jpg" alt="Products" class="w-100 products-img">
                            <div class="p-2 block-cart">
                                <a href="../" class="btn btn-secondary btn-block">Add to Cart</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="row py-2">
                    <div class="col-8">
                        <h5 class="">
                            <a href="../" class="products-link">I U25A1 Unicode</a>
                        </h5>
                    </div>
                    <div class="col-4">
                        <h5 class="text-right">$7.72</h5>
                    </div>
                </div>
                <div class="border-top border-dark">
                    <p class="text-secondary m-0 py-2">Classic T-Shirt, designed by ThomaseSmith</p>
                </div>
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
            <div class="col-lg-3 col-6 py-3 filterCol price-20 colour-multi-colored size-XS size-S size-M size-L" data-name="dat" data-price="24.15" data-time="21.03" data-popular="5">
                <div>
                    <a href="../">
                        <div class="img-cart">
                            <img src="../img/products/men-08.jpg" alt="Products" class="w-100 products-img">
                            <div class="p-2 block-cart">
                                <a href="../" class="btn btn-secondary btn-block">Add to Cart</a>
                            </div>
                        </div>
                    </a>
                </div>
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
                <div>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>
    </div>
@endsection
