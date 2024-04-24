<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.depan.head')

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

    @include('layouts.depan.script')
</body>

</html>
