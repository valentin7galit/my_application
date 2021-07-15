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
                                    <input class="form-check-input" type="radio" name="Name" id="def" onclick="showDefault()">
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
                                    <input class="form-check-input" type="radio" name="Price" id="10" onclick="filterProduct('price-10'); sortLow();">
                                    <label class="form-check-label" for="10">5$ - 10$</label><br>
                                    <input class="form-check-input" type="radio" name="Price" id="15" onclick="filterProduct('price-15'); sortLow();">
                                    <label class="form-check-label" for="15">10$ - 15$</label><br>
                                    <input class="form-check-input" type="radio" name="Price" id="20" onclick="filterProduct('price-20'); sortLow();">
                                    <label class="form-check-label" for="20">15$ - 20$</label><br>
                                    <input class="form-check-input" type="radio" name="Price" id="25" onclick="filterProduct('price-25'); sortLow();">
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
                                    <input class="form-check-input" type="radio" name="Colour" id="black" onclick="filterProduct('colour-Black')">
                                    <label class="form-check-label" for="black">Black</label><br>
                                    <input class="form-check-input" type="radio" name="Colour" id="gray" onclick="filterProduct('colour-Gray')">
                                    <label class="form-check-label" for="gray">Gray</label><br>
                                    <input class="form-check-input" type="radio" name="Colour" id="blue" onclick="filterProduct('colour-Blue')">
                                    <label class="form-check-label" for="blue">Blue</label><br>
                                    <input class="form-check-input" type="radio" name="Colour" id="green" onclick="filterProduct('colour-Green')">
                                    <label class="form-check-label" for="green">Green</label><br>
                                    <input class="form-check-input" type="radio" name="Colour" id="yellow" onclick="filterProduct('colour-Yellow')">
                                    <label class="form-check-label" for="yellow">Yellow</label><br>
                                    <input class="form-check-input" type="radio" name="Colour" id="red" onclick="filterProduct('colour-Red')">
                                    <label class="form-check-label" for="red">Red</label><br>
                                    <input class="form-check-input" type="radio" name="Colour" id="white" onclick="filterProduct('colour-White')">
                                    <label class="form-check-label" for="white">White</label><br>
                                    <input class="form-check-input" type="radio" name="Colour" id="multicoloured" onclick="filterProduct('colour-Multi-Colored')">
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
                            <a class="nav-link link-sort text-secondary" href="#" onclick="showDefault()">Default</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container py-3 bg-white">
    <div class="row">
        @foreach ($products as $product)
            @foreach ($prices as $price)
                @if ($product->id === $price->id)
                    @foreach ($product->lot_sizes as $lot_size)
                        @if ($lot_size->total_stock !== 0)
                            @if ($loop->first)
                                <div class="col-lg-3 col-6 py-3 protuct-sort protuct-filter @foreach ($product->sizes->slice(0, 1) as $size) size-{{ $size->name }} @endforeach @foreach ($product->sizes->slice(1, 1) as $size) size-{{ $size->name }} @endforeach @foreach ($product->sizes->slice(2, 1) as $size) size-{{ $size->name }} @endforeach @foreach ($product->sizes->slice(3, 1) as $size) size-{{ $size->name }} @endforeach @foreach ($product->sizes->slice(4, 1) as $size) size-{{ $size->name }} @endforeach price-{{ $price->price < 10 ? $price->price = 10 : ($price->price > 10 && $price->price < 15 ? $price->price = 15 : ($price->price > 15 && $price->price < 20 ? $price->price = 20 : $price->price = 25)) }} colour-{{ $product->colours->name }}" data-name="{{ $product->name }}" data-price="{{ $product->price }}" data-time="{{ substr($product->published_at, 0, 4)}}{{ substr($product->published_at, 5, 2)}}{{ substr($product->published_at, 8, 2)}}" data-popular="{{ $product->rating }}">
                                    <a href="/products/{{ $product->id }}">
                                        <div class="img-cart">
                                            <img src="{{ $product->product_images->path }}" alt="{{ $product->product_images->name }}" class="w-100 products-img">
                                            <div class="p-2 block-cart">
                                                {{-- Button add to wishlist for Vue --}}
                                                <add-wishlist 
                                                    :product_id="{{ json_encode($product->id) }}" 
                                                    :product_img="{{ json_encode($product->product_images->path) }}" 
                                                    :product_img_name="{{ json_encode($product->product_images->name) }}" 
                                                    :product_name="{{ json_encode($product->name) }}" 
                                                    :product_price="{{ json_encode($product->price) }}">
                                                </add-wishlist>
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
                            @endif
                        @endif
                    @endforeach
                @endif
            @endforeach
        @endforeach
    </div>
</div>
