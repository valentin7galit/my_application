<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Valentin Galit">
    </head>
    <body>
        <table style="width:100%; padding: 20px;">
            <tr>
                <th style="text-align: right; width:40%;">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo" height="45">
                </th>
                <th style="text-align: left; width:60%;">T-shirts.com | Forever with you</th> 
            </tr>
        </table>
        <table style="width:100%; padding: 20px;">
            <tr>
                <th style="text-align: left;">Contact</th>
                <th style="text-align: left;">Message</th> 
            </tr>
            <tr>
                <td>{{ $name }}</td>
                <td>{{ $content }}</td>
            </tr>
            <tr>
                <td>{{ $email }}</td>
            </tr>
        </table>
    </body>
</html>