<!doctype html>
<html class="landing simple-sticky-header-enabled">
<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>@yield('page_name')</title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,600,800,900|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="vendor/animate/animate.css">

    <link rel="stylesheet" href="vendor/font-awesome/css/all.min.css" />
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="vendor/bootstrap-tagsinput/bootstrap-tagsinput.css" />
    <link rel="stylesheet" href="vendor/summernote/summernote-bs4.css" />

    <!--(remove-empty-lines-end)-->

    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/theme.css" />


    <!--(remove-empty-lines-end)-->



    <!-- Skin CSS -->
    <link rel="stylesheet" href="css/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Head Libs -->
    <script src="vendor/modernizr/modernizr.js"></script>

</head>

<body>
<section class="body">

    <!--  Header located: layouts>header.blade.php  -->
    @include('layouts.header')

    <!--  Notifications-alerts..etc. located: layouts>notifications.blade.php  -->

    <div class="inner-wrapper">

        <!--  Sidebar located: layouts>sidebar.blade.php  -->
        @include('layouts.sidebar')

        <section role="main" class="content-body">
            <header class="page-header">
                <h2>@yield('page_name')</h2>
            </header>

        @include('layouts.notifications')
            <!-- start: page -->
        @yield('content')
        <!-- end: page -->

        </section>
    </div>

</section>
{{--@include('layouts.footer')--}}

<!-- Vendor -->
<script src="{{asset('vendor/jquery/jquery.js')}}"></script>
<script src="{{asset('vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
<script src="{{asset('vendor/popper/umd/popper.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.js')}}"></script>
<script src="{{asset('vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('vendor/common/common.js')}}"></script>
<script src="{{asset('vendor/nanoscroller/nanoscroller.js')}}"></script>
<script src="{{asset('vendor/magnific-popup/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>

<!-- Specific Page Vendor -->
@yield('custom_footer')
<!-- Specific Page Vendor -->
<script src="{{asset('vendor/jquery-ui/jquery-ui.js')}}"></script>
<script src="{{asset('vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js')}}"></script>
<script src="{{asset('vendor/jquery-appear/jquery.appear.js')}}"></script>
<script src="{{asset('vendor/bootstrap-multiselect/js/bootstrap-multiselect.js')}}"></script>
<script src="{{asset('vendor/jquery.easy-pie-chart/jquery.easypiechart.js')}}"></script>
<script src="{{asset('vendor/flot/jquery.flot.js')}}"></script>
<script src="{{asset('vendor/flot.tooltip/jquery.flot.tooltip.js')}}"></script>
<script src="{{asset('vendor/flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('vendor/flot/jquery.flot.categories.js')}}"></script>
<script src="{{asset('vendor/flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('vendor/jquery-sparkline/jquery.sparkline.js')}}"></script>
<script src="{{asset('vendor/raphael/raphael.js')}}"></script>
<script src="{{asset('vendor/morris/morris.js')}}"></script>
<script src="{{asset('vendor/gauge/gauge.js')}}"></script>
<script src="{{asset('vendor/snap.svg/snap.svg.js')}}"></script>
<script src="{{asset('vendor/liquid-meter/liquid.meter.js')}}"></script>
<script src="{{asset('vendor/jqvmap/jquery.vmap.js')}}"></script>
<script src="{{asset('vendor/jqvmap/data/jquery.vmap.sampledata.js')}}"></script>
<script src="{{asset('vendor/jqvmap/maps/jquery.vmap.world.js')}}"></script>
<script src="{{asset('vendor/jqvmap/maps/continents/jquery.vmap.africa.js')}}"></script>
<script src="{{asset('vendor/jqvmap/maps/continents/jquery.vmap.asia.js')}}"></script>
<script src="{{asset('vendor/jqvmap/maps/continents/jquery.vmap.australia.js')}}"></script>
<script src="{{asset('vendor/jqvmap/maps/continents/jquery.vmap.europe.js')}}"></script>
<script src="{{asset('vendor/jqvmap/maps/continents/jquery.vmap.north-america.js')}}"></script>
<script src="{{asset('vendor/jqvmap/maps/continents/jquery.vmap.south-america.js')}}"></script>


<!--(remove-empty-lines-end)-->

<!-- Theme Base, Components and Settings -->
<script src="{{asset('js/theme.js')}}"></script>

<!-- Theme Custom -->
<script src="{{asset('js/custom.js')}}"></script>

<!-- Theme Initialization Files -->
<script src="{{asset('js/theme.init.js')}}"></script>
<!-- Examples -->
<script src="{{asset('js/examples/examples.dashboard.js')}}"></script>
@yield('custom_footer')

</body>
</html>
