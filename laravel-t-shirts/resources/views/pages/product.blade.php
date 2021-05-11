@extends('layouts')

@section('title')
    {{ $products->name }}
@endsection

@section('content')
    <div class="container container py-3 bg-white">
        <div class="row product-position">
            <div class="col-lg-7">
                <div class="py-2">
                    <img src="{{ $products->product_images->path }}" alt="{{ $products->product_images->name }}" class="w-100">
                </div>
                @foreach ($products->product_galleries as $product_gallery)
                    <div class="py-2">
                        <img src="{{ $product_gallery->path }}" alt="{{ $product_gallery->name }}" class="w-100 img-product-secund"> 
                    </div>
                @endforeach
            </div>
            <div class="col-lg-5 product-sticky">
                <h2>{{ $products->name }}</h2>
                <div class="border-bottom border-secondary py-2">
                    <div class="row">
                        <div class="col-6">
                            <h5>{{ $products->currency }}{{ $products->price }}</h5>
                        </div>
                        <div class="col-6 text-right">
                            @if ($products->rating === 1)
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            @endif
                            @if ($products->rating === 2)
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            @endif
                            @if ($products->rating === 3)
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            @endif
                            @if ($products->rating === 4)
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            @endif
                            @if ($products->rating === 5)
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            @endif
                        </div>
                    </div>
                    <img src="{{ $products->product_images->path }}" alt="{{ $products->product_images->name }}" class="sing-product-img">
                </div>
                <div class="py-2 border-bottom border-secondary">
                    <h5 class="">Size</h5>
                    <div class="radio-size row">
                        <div class="col-2">
                            <input type="radio" id="xs" name="Size" value="xs">
                            <label for="xs" class="btn btn-outline-secondary size-product p-2">XS</label>
                        </div>
                        <div class="col-2">
                            <input type="radio" id="s" name="Size" value="s">
                            <label for="s" class="btn btn-outline-secondary size-product p-2">S</label>
                        </div>
                        <div class="col-2">
                            <input type="radio" id="m" name="Size" value="m">
                            <label for="m" class="btn btn-outline-secondary size-product p-2">M</label>
                        </div>
                        <div class="col-2">
                            <input type="radio" id="l" name="Size" value="l">
                            <label for="l" class="btn btn-outline-secondary size-product p-2">L</label>
                        </div>
                        <div class="col-2">
                            <input type="radio" id="xl" name="Size" value="xl">
                            <label for="xl" class="btn btn-outline-secondary size-product p-2">XL</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <div class="form-group">
                                <select class="form-control p-2 btn btn-outline-secondary">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-10">
                            <button type="button" class="btn btn-secondary btn-block">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="py-2">
                    <h5>Description</h5>
                    <p>{{ $products->description }}</p>
                    <p><span class="font-weight-bold">Code: </span>{{ $products->code }}</p>
                    <p><span class="font-weight-bold">Colour: </span>{{ $products->colours->name }}</p>
                    <p><span class="font-weight-bold">Product Date: </span>{{ $products->published_at }}</p>
                </div>
            </div>
        </div>
        <h2>Features</h2>
        <p>{{ $products->features }}</p>
    </div>
@endsection