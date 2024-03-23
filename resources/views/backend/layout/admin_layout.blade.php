<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- theme meta -->
    <meta name="theme-name" content="quixlab" />

    <title>Admin | @yield('title')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('AdminSide/images/favicon.png')}}">
    <!-- Pignose Calender -->
    <link href="{{asset('AdminSide/plugins/pg-calendar/css/pignose.calendar.min.css')}}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{asset('AdminSide/plugins/chartist/css/chartist.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminSide/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css')}}">
    <!-- Custom Stylesheet -->
    <link href="{{asset('AdminSide/css/style.css')}}" rel="stylesheet">

</head>

<body>
<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
        </svg>
    </div>
</div>
<!--*******************
    Preloader end
********************-->
<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

@include('backend.inc.admin_header')
@include('backend.inc.admin_sidebar')

@yield('content')

@include('backend.inc.admin_footer')
</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
<script src="{{asset('AdminSide/plugins/common/common.min.js')}}"></script>
<script src="{{asset('AdminSide/js/custom.min.js')}}"></script>
<script src="{{asset('AdminSide/js/settings.js')}}"></script>
<script src="{{asset('AdminSide/js/gleek.js')}}"></script>
<script src="{{asset('AdminSide/js/styleSwitcher.js')}}"></script>

<!-- Chartjs -->
<script src="{{asset('/AdminSide/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Circle progress -->
<script src="{{asset('/AdminSide/plugins/circle-progress/circle-progress.min.js')}}"></script>
<!-- Datamap -->
<script src="{{asset('/AdminSide/plugins/d3v3/index.js')}}"></script>
<script src="{{asset('/AdminSide/plugins/topojson/topojson.min.js')}}"></script>
<script src="{{asset('/AdminSide/plugins/datamaps/datamaps.world.min.js')}}"></script>
<!-- Morrisjs -->
<script src="{{asset('/AdminSide/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('/AdminSide/plugins/morris/morris.min.js')}}"></script>
<!-- Pignose Calender -->
<script src="{{asset('/AdminSide/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('/AdminSide/plugins/pg-calendar/js/pignose.calendar.min.js')}}"></script>
<!-- ChartistJS -->
<script src="{{asset('/AdminSide/plugins/chartist/js/chartist.min.js')}}"></script>
<script src="{{asset('/AdminSide/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js')}}"></script>



<script src="{{asset('/AdminSide/js/dashboard/dashboard-1.js')}}"></script>

</body>

</html>
