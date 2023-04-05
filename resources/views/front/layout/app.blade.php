<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Laralink" />
    <!-- Favicon Icon -->
    <link rel="icon" href="assets/img/favicon.png" />
    <!-- Site Title -->
    <title>BUGS BUNNY</title>
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/lightgallery.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/lightgallery.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />

    <style>
           
        .alert-success {
            --bs-alert-color: #e7e7e7 !important;
            --bs-alert-bg: #181818 !important;
            --bs-alert-border-color: #f3f3f3 !important;
            width: 50% !important;
            margin-left: 25% !important;
            margin-top:150px !important;
        }

        .btn-close{

            color: #e7e7e7 !important;
        }

    </style>
</head>
<body>

    @include('front.layout.header')
    @include('back.layout.error')
    @include('back.layout.status')    
    @yield('content')
    @include('front.layout.footer')


    <!-- Script -->
    <script src="{{asset('assets/js/plugins/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/isotope.pkg.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.slick.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.counter.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/lightgallery.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/gsap.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

<!-- Mirrored from arino-html.vercel.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Feb 2023 21:22:56 GMT -->
</html>
