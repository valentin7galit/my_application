@extends('layouts')

@section('title')
    {{ $products->name }}
@endsection

@section('content')
    <div class="container container py-3 bg-white">
        <div class="row product-position">
            <div class="col-lg-7">
                <div class="py-2">
                    <img src="{{ $products->product_images->path }}" alt="{{ $products->product_images->name }}" class="w-100 img-product-height">
                </div>
                @foreach ($products->product_galleries as $product_gallery)
                    <div class="py-2">
                        <img src="{{ $product_gallery->path }}" alt="{{ $product_gallery->name }}" class="w-100 img-product-height"> 
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
                {{-- Button add to cart for Vue --}}
                <add-cart 
                    product_id="{{ $products->id }}" 
                    product_img="{{ $products->product_images->path }}" 
                    product_img_name="{{ $products->product_images->name }}" 
                    product_name="{{ $products->name }}" 
                    product_price="{{ $products->price }}"
                    :product_size="{{ json_encode($products->sizes) }}"
                    :product_size_stock="{{ json_encode($products->lot_sizes) }}">
                </add-cart>
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
        <p>{!! $products->features !!}</p>
    </div>
@endsection