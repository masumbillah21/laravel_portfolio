<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ config('app.name') }} | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css') }}/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css') }}/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css') }}/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;0,800;1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css') }}/style.css">
</head>
<body>
    @include('components.header')

    @yield('content')

    @include('components.footer')

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('assets/js') }}/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js') }}/owl.carousel.min.js"></script>
    @yield('script')
    <script>
        function removeLastSlash(str) {
            if (str.endsWith('/')) {
                return str.slice(0, -1);
            }
            return str;
        }
        document.addEventListener('DOMContentLoaded', function() {
            var currentUrl = window.location.href;
            currentUrl = removeLastSlash(currentUrl)
            var navLinks = document.querySelectorAll('.nav-link');
            navLinks.forEach(function(link) {
                if (link.getAttribute('href') === currentUrl) {
                    link.classList.add('active');
                }else {
                    link.classList.remove('active');
                }
            });
        });
    </script>
</body>
</html>