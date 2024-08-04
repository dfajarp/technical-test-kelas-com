<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <title>My App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ 'assets/css/owl-caroousel/owl.carousel.css' }}">
    <link rel="stylesheet" href="{{ 'assets/css/owl-caroousel/owl.theme.default.min.css' }}">

    <link rel="stylesheet" href="{{ 'assets/css/custom.css' }}">
    <link rel="stylesheet" href="{{ 'assets/css/home.css' }}">
    <link rel="stylesheet" href="{{ 'assets/css/benefit.css' }}">
    <link rel="stylesheet" href="{{ 'assets/css/package.css' }}">
    <link rel="stylesheet" href="{{ 'assets/css/contact.css' }}">


    <link rel="stylesheet" href="{{ 'assets/css/slick-carousel/slick.css' }}">
    <link rel="stylesheet" href="{{ 'assets/css/slick-carousel/slick-theme.css' }}">
</head>

<body>
    @include('partials._navbar')

    <div class="">
        {{-- @yield('content') --}}

        <!-- Content Sections -->
        <div id="homepage" class="">
            @include('home')
        </div>
        <div id="benefit" class=" py-14 container">
            @include('benefit')
        </div>
        <div id="package" class=" py-14 container">
            @include('package')
        </div>
        <div id="class" class="py-14 container">
            @include('class')
        </div>
        <div id="contact" class=" py-14">
            @include('contact')
        </div>
    </div>
</body>

<script src="{{ 'assets/js/jquery-3.7.1.min.js' }}"></script>

<script src="{{ 'assets/js/owl-carousel/owl.carousel.js' }}"></script>
<script src="{{ 'assets/js/slick-carousel/slick.js' }}"></script>

<script src="{{ 'assets/js/custom.js' }}"></script>

</html>
