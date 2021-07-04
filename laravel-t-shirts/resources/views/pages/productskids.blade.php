@extends('layouts')

@section('title')
    Kids
@endsection

@section('content')
    <div class="container py-3 bg-white">
        <h1 class="py-2">Kids' T-shirts</h1>
        <p>Add an easy splash of color into favorite outfits with T-shirts graphic. Merging classic styles and contemporary graphics, our collection includes all. Breathable, lightweight materials offer comfort and freedom, while glitter graphics introduce an additional sense of youthful fun.</p>
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