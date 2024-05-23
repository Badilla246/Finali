<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foods and Drinks</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div id="main">
        <div id="sidebar">
            <div id="branding">
                <img src="{{ asset('https://th.bing.com/th/id/OIP.o8Sw2mQtlVwcMk40MimrAQHaEK?rs=1&pid=ImgDetMain') }}" alt="" class="image">
                <h1>Chef Food</h1>
            </div>

            <nav id="main-nav">
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/foods') }}">Foods</a>
                <a href="{{ url('/drinks') }}">Drinks</a>
                <a href="{{ url('/qr') }}">Wifi</a>
                <a href="{{ url('/gcash') }}">GCash</a>
            </nav>
        </div>
        <div id="content">
            @yield('content')
        </div>
    </div>

</body>
</html>
