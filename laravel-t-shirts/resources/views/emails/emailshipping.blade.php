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
    </head>
    <body>
        <div class="container">
            <div class="row py-2">
                <div class="col-5 text-right">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo" height="45">
                </div>
                <div class="col-7">
                    <p class="py-3">T-shirts.com | Forever with you</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h3 class="border-bottom border-secondary py-1 text-center">Client</h3>
                    <p><span class="font-weight-bold">Name: </span>{{ $fname }} {{ $lname }}</p>
                    <p><span class="font-weight-bold">E-mail: </span>{{ $email }}</p>
                    <p><span class="font-weight-bold">Phone Number: </span>{{ $phone }}</p>
                    <p><span class="font-weight-bold">Address: </span>{{ $address }}</p>
                    <p><span class="font-weight-bold">Postal Code: </span>{{ $postal }}</p>
                    <p><span class="font-weight-bold">City: </span>{{ $city }}</p>
                </div>
                <div class="col-6">
                    <h3 class="border-bottom border-secondary py-1 text-center">Products</h3>
                </div>
            </div>
        </div>
    </body>
</html>
