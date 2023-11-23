<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css') }}/bootstrap.min.css">
</head>
<body>
    @include('components.header')

    @yield('content')

    @include('components.footer')
    <script src="{{ asset('assets/js') }}/bootstrap.bundle.min.js"></script>
</body>
</html>