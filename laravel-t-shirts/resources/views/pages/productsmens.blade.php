@extends('layouts')

@section('title')
    Men's
@endsection

@section('content')
    <div class="container py-3 bg-white">
        <h1 class="py-2">Men's T-shirts</h1>
        <p>The best match starts here. Find everyday active equipment such as t-shirts and lightweight coats designed with the best performance t-shirts technology. Or take to the streets in our collection of life shirts. Whatever your style or color, give it your all in the men's t-shirt collection.</p>
    </div>
    @include('pages.products')
@endsection

@section('footerScripts')
    <script type="text/javascript">
        filterProduct("all");

        function filterProduct(name) {
            const x = document.getElementsByClassName("protuct-filter");
            if (name == "all") {
                name = "";
            }
            for (let i = 0; i < x.length; i++) {
                removeProduct(x[i], "show");
                if (x[i].className.indexOf(name) > -1) {
                    addProduct(x[i], "show");
                }
        }
        }

        function addProduct(element, name) {
            let arr1 = element.className.split(" ");
            let arr2 = name.split(" ");
            for (let i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
            }
        }

        function removeProduct(element, name) {
            let arr1 = element.className.split(" ");
            let arr2 = name.split(" ");
            for (let i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);     
                }
            }
            element.className = arr1.join(" ");
        }
    </script>
@endsection
