<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PM Shoes</title>

    <link rel="apple-touch-icon" href="{{ asset('img/theme/apple-icon.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/img/favicon.ico') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme/templatemo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme/custom.css') }}">

    <!-- Load fonts style after rendering the layout styles -->
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap"> --}}
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.min.css') }}">
    
</head>

<body>
    <div class="header">
        @include('layouts.header')
    </div>

    <div class="content">
        @yield('content')
    </div>

    <div class="footer">
        @include('layouts.footer')
    </div>

    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    {{-- <script src="{{ asset('js/theme/jquery-migrate-1.2.1.min.js"') }}></script> --}}
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/theme/templatemo.js') }}"></script>
    <script src="{{ asset('js/theme/custom.js') }}"></script>

</body>

</html>