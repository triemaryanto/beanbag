<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Title -->
    <title>Bean Bag Wonosobo</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('goetze/') }}/assets/img/favicon.ico">


    <!-- CSS Here -->
    <!--  Venobox.css -->
    <link rel="stylesheet" href="{{ asset('goetze/') }}/assets/css/venobox.min.css">
    <!--  PriceSlider.css -->
    <link rel="stylesheet" href="{{ asset('goetze/') }}/assets/css/price-slider-1.12.1.css">
    <!-- NivoSlider .css -->
    <link rel="stylesheet" href="{{ asset('goetze/') }}/assets/css/nivo-slider.css">
    <!-- Nice Select .css -->
    <link rel="stylesheet" href="{{ asset('goetze/') }}/assets/css/nice-select.css">
    <!-- Pe Icon 7-stroke .css -->
    <link rel="stylesheet" href="{{ asset('goetze/') }}/assets/css/pe-icon-7-stroke.css">
    <!-- Magnific Popup.css -->
    <link rel="stylesheet" href="{{ asset('goetze/') }}/assets/css/magnific-popup.css">
    <!-- Slick Nav.css -->
    <link rel="stylesheet" href="{{ asset('goetze/') }}/assets/css/slicknav-1.0.10.min.css">
    <!-- Animated.css -->
    <link rel="stylesheet" href="{{ asset('goetze/') }}/assets/css/animate.min.css">
    <!-- Owl.carousel.css -->
    <link rel="stylesheet" href="{{ asset('goetze/') }}/assets/css/owl.carousel-2.3.4.min.css">
    <!-- Fontawesome.css -->
    <link rel="stylesheet" href="{{ asset('goetze/') }}/assets/css/fontawesome-free-5.12.0.min.css">
    <!-- Bootstrap.css -->
    <link rel="stylesheet" href="{{ asset('goetze/') }}/assets/css/bootstrap-4.3.1.min.css">
    <!-- Default.css -->
    <link rel="stylesheet" href="{{ asset('goetze/') }}/assets/css/default.css">
    <!-- Style.css -->
    <link rel="stylesheet" href="{{ asset('goetze/') }}/assets/css/main.css">
    <!-- Responsive.css -->
    <link rel="stylesheet" href="{{ asset('goetze/') }}/assets/css/responsive.css">

    <!-- Jquery -->
    <script src="{{ asset('goetze/') }}/assets/js/jquery-1.12.4.min.js"></script>
    @stack('css')
    @vite(['resources/js/app.js'])
    @livewireStyles
</head>

<body>
    <!-- Start Header Area -->
    @include('layouts.depan.header')
    <!-- End Header Area -->
    <main>
        {{ $slot ?? '' }}

    </main>
    @include('layouts.depan.footer')
    <!-- JS -->
    <!-- Popper.js -->
    @livewireScripts
    <script src="{{ asset('goetze/') }}/assets/js/popper.min.js"></script>
    <!-- Bootstrap.js -->
    <script src="{{ asset('goetze/') }}/assets/js/bootstrap-4.3.1.min.js"></script>
    <!-- Plugin.js -->
    <script src="{{ asset('goetze/') }}/assets/js/plugins.js"></script>
    <!-- Modernizr.js -->
    <script src="{{ asset('goetze/') }}/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Owl.Carousel.js -->
    <script src="{{ asset('goetze/') }}/assets/js/vendor/owl.carousel-2.3.4.min.js"></script>
    <!-- Waypoints.js -->
    <script src="{{ asset('goetze/') }}/assets/js/vendor/waypoints-4.0.1.min.js"></script>
    <!-- Wow.js -->
    <script src="{{ asset('goetze/') }}/assets/js/vendor/wow-1.1.3.min.js"></script>
    <!-- Slick Nav.js -->
    <script src="{{ asset('goetze/') }}/assets/js/vendor/slicknav-1.0.10.min.js"></script>
    <!-- Scroll Up.js -->
    <script src="{{ asset('goetze/') }}/assets/js/vendor/scrollUp-2.4.1.min.js"></script>
    <!-- MagnificPopup.js -->
    <script src="{{ asset('goetze/') }}/assets/js/vendor/magnific-popup-1.1.0.min.js"></script>
    <!-- NivoSlider.js -->
    <script src="{{ asset('goetze/') }}/assets/js/vendor/jquery.nivo.slider.pack.js"></script>
    <!-- Countdown.js -->
    <script src="{{ asset('goetze/') }}/assets/js/vendor/countdown-2.2.0.min.js"></script>
    <!-- PriceSlider.js -->
    <script src="{{ asset('goetze/') }}/assets/js/vendor/price-slider-1.12.1.js"></script>
    <!-- Venobox.js -->
    <script src="{{ asset('goetze/') }}/assets/js/vendor/venobox.min.js"></script>

    <!-- Main.js -->
    <script src="{{ asset('goetze/') }}/assets/js/main.js"></script>
</body>

</html>
