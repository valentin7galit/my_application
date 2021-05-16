<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Valentin Galit">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Font Icons -->
        <script src="https://kit.fontawesome.com/547107f345.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="bg-secondary text-center py-3">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" height="45">
            <span class="align-middle">T-shirts.com | Forever with you</span>
        </div>
        <div class="container bg-white">
            <div class="row">
                <div class="col-4">
                    <h1 class="text-center py-2">Contact</h1>
                    <h4>{{ $name }}</h4>
                    <p class="font-italic">{{ $email }}</p>
                </div>
                <div class="col-8">
                    <h1 class="text-center py-2">Message</h1>
                    <h4>{{ $content }}</h4>
                </div>
            </div>
        </div>
        <div class="bg-dark text-center py-2 row">
            <div class="col-4">
                <a href="https://www.facebook.com/" target="blanck" class="text-secondary">
                    <i class="fab fa-facebook-f h3"></i>
                </a>
            </div>
            <div class="col-4">
                <a href="https://www.instagram.com/" target="blanck" class="text-secondary">
                    <i class="fab fa-instagram h3"></i>
                </a>
            </div>
            <div class="col-4">
                <a href="https://twitter.com/" target="blanck" class="text-secondary">
                    <i class="fab fa-twitter h3"></i>
                </a>
            </div>
        </div>
    </body>
</html>