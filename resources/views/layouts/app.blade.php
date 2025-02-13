<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PM Shoes</title>

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

</body>

</html>