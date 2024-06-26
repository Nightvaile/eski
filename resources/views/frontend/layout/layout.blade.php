<!DOCTYPE html>
<html lang="tr">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Nightvaile | @yield('title')</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Constra HTML Template v1.0">

    <!-- theme meta -->
    <meta name="theme-name" content="aviato" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('UserSide/images/favicon.png')}}" />

    <!-- Themefisher Icon font -->
    <link rel="stylesheet" href="{{asset('UserSide/plugins/themefisher-font/style.css')}}">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{asset('UserSide/plugins/bootstrap/css/bootstrap.min.css')}}">

    <!-- Animate css -->
    <link rel="stylesheet" href="{{asset('UserSide/plugins/animate/animate.css')}}">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{asset('UserSide/plugins/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('UserSide/plugins/slick/slick-theme.css')}}">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('UserSide/css/style.css')}}">

    <!-- Diğer head içerikleri -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body id="body">
@include('frontend.inc.header')

@yield('content')

@include('frontend.inc.footer')
<!--
Essential Scripts
=====================================-->

<!-- Main jQuery -->
<script src="{{asset('UserSide/plugins/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.1 -->
<script src="{{asset('UserSide/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- Bootstrap Touchpin -->
<script src="{{asset('UserSide/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}"></script>
<!-- Instagram Feed Js -->
<script src="{{asset('UserSide/plugins/instafeed/instafeed.min.js')}}"></script>
<!-- Video Lightbox Plugin -->
<script src="{{asset('UserSide/plugins/ekko-lightbox/dist/ekko-lightbox.min.js')}}"></script>
<!-- Count Down Js -->
<script src="{{asset('UserSide/plugins/syo-timer/build/jquery.syotimer.min.js')}}"></script>

<!-- slick Carousel -->
<script src="{{asset('UserSide/plugins/slick/slick.min.js')}}"></script>
<script src="{{asset('UserSide/plugins/slick/slick-animation.min.js')}}"></script>

<!-- Google Mapl -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script type="text/javascript" src="{{asset('UserSide/plugins/google-map/gmap.js')}}"></script>

<!-- Main Js File -->
<script src="{{asset('UserSide/js/script.js')}}"></script>

<script>
    $(document).ready(function() {
        $('.dropdown-toggle').on('click', function(e) {
            e.preventDefault(); // Varsayılan link işlemini engelle
            window.location.href = $(this).attr('href'); // Belirtilen linke yönlendir
        });
    });
</script>

</body>
</html>
