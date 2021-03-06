<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="@yield('description', 'Online shop for T-shirts system')">
        <meta name="author" content="Valentin Galit">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- CSS -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
        <!-- Script -->
        @yield('headerScripts')
        <!-- Font Icons -->
        <script src="https://kit.fontawesome.com/547107f345.js" crossorigin="anonymous"></script>
        <!-- Title & Icon -->
        <title>@yield('title', 'Online shop for T-shirts')</title>
        <link rel="icon" href="./img/logo.png">
    </head>
    <body class="body-color">
        @include('header')
        <main role="main">
            @yield('content')
        </main>
        @include('footer')
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Script -->
        <script src="{{ URL::asset('js/products_filter.js') }}"></script>
        <script src="{{ URL::asset('js/products_sort.js') }}"></script>
        @yield('footerScripts')
    </body>
</html>