@extends('layouts')

@section('title')
    Cart
@endsection

@section('content')
    <show-cart 
        :product_size_stock="{{ json_encode($lot_size) }}"
        :product_sizes="{{ json_encode($sizes) }}">
    </show-cart>
@endsection
