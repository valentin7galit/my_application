@extends('layouts')

@section('title')
    Shipping
@endsection

@section('content')
    <div class="container py-3 bg-white">
        <h1>Shipping</h1>
        <div class="row">
            <div class="col-md-8 col-12">
                <form action="{{route('shipping-form')}}" method="post" id="formshipping">
                    @csrf
                    <h3 class="border-top border-secondary py-2">Delivery Details</h3>
                    {{-- Block to Delivery Details for Vue --}}
                    <delivery-details></delivery-details>
                </form>
            </div>
            {{-- Block to Order Summary for Vue --}}
            <order-summary></order-summary>
        </div>
    </div>
@endsection
