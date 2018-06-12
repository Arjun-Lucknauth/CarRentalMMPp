<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon.png')}}">
    <title>Lucknauth Car Rental</title>
    <link href="{{asset('css/backend_css/lib/chartist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/backend_css/lib/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/backend_css/lib/owl.theme.default.min.css')}}" rel="stylesheet" />
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/backend_css/lib/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('css/backend_css/helper.css')}}" rel="stylesheet">
    <link href="{{asset('css/backend_css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/backend_css/lib/calendar2/semantic.ui.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/backend_css/lib/calendar2/pignose.calendar.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/backend_css/lib/calendar2/pignose.calendar.min.css')}}" rel="stylesheet">
    <link href="{{asset('js/backend_js/lib/animatedModal/animatedModal.js-master/demo/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('js/backend_js/lib/animatedModal/animatedModal.js-master/demo/css/normalize.min.css')}}" rel="stylesheet">
    <link  href="{{asset('css/backend_css/lib/html5-editor/bootstrap-wysihtml5.css')}}" rel="stylesheet" />
    <link href="{{asset('css/backend_css/lib/sweetalert/sweetalert.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fix-header fix-sidebar">
<!-- Preloader - style you can find in spinners.css -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>


@include('layouts.AdminLayout.Admin_header')
@include('layouts.AdminLayout.Admin_sidebar')
@yield('content')
@include('layouts.AdminLayout.Admin_footer')


<!-- All Jquery -->
<script src="{{asset('js/backend_js/lib/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('js/backend_js/lib/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('js/backend_js/lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('js/backend_js/jquery.slimscroll.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('js/backend_js/sidebarmenu.js')}}"></script>
<!--stickey kit -->
<script src="{{asset('js/backend_js/lib/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
<script src="{{asset('js/backend_js/lib/html5-editor/wysihtml5-0.3.0.js')}}"></script>
<script src="{{asset('js/backend_js/lib/html5-editor/bootstrap-wysihtml5.js')}}"></script>
<script src="{{asset('js/backend_js/lib/html5-editor/wysihtml5-init.js')}}"></script>
<!-- Amchart -->
<script src="{{asset('js/backend_js/lib/morris-chart/raphael-min.js')}}"></script>
<script src="{{asset('js/backend_js/lib/morris-chart/morris.js')}}"></script>
<script src="{{asset('js/backend_js/lib/morris-chart/dashboard1-init.js')}}"></script>
<!--Calender-->
<script src="{{asset('js/backend_js/lib/calendar-2/moment.latest.min.js')}}"></script>
<script src="{{asset('js/backend_js/lib/calendar-2/semantic.ui.min.js')}}"></script>
<script src="{{asset('js/backend_js/lib/calendar-2/prism.min.js')}}"></script>
<script src="{{asset('js/backend_js/lib/calendar-2/pignose.calendar.min.js')}}"></script>
<script src="{{asset('js/backend_js/lib/calendar-2/pignose.init.js')}}"></script>
<!--Datamap-->
<script src="{{asset('js/backend_js/lib/datamap/d3.min.js')}}"></script>
<script src="{{asset('js/backend_js/lib/datamap/topojson.js')}}"></script>
<script src="{{asset('js/backend_js/lib/datamap/datamaps.world.min.js')}}"></script>
<script src="{{asset('js/backend_js/lib/datamap/datamap-init.js')}}"></script>

<script src="{{asset('js/backend_js/lib/weather/jquery.simpleWeather.min.js')}}"></script>
<script src="{{asset('js/backend_js/lib/weather/weather-init.js')}}"></script>
<script src="{{asset('js/backend_js/lib/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/backend_js/lib/owl-carousel/owl.carousel-init.js')}}"></script>
<!--Chart-->
<script src="{{asset('js/backend_js/lib/chartist/chartist.min.js')}}"></script>
<script src="{{asset('js/backend_js/lib/chartist/chartist-plugin-tooltip.min.js')}}"></script>
<script src="{{asset('js/backend_js/lib/chartist/chartist-init.js')}}"></script>
<!-- Form validation -->
<script src="{{asset('js/backend_js/lib/form-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/backend_js/lib/form-validation/jquery.validate-init.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('js/backend_js/custom.min.js')}}"></script>
<!--DataTable-->
<script src="{{asset('js/backend_js/lib/datatables/datatables.min.js')}}"></script>
<script src="{{asset('js/backend_js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('js/backend_js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('js/backend_js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js')}}"></script>
<script src="{{asset('js/backend_js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js')}}"></script>
<script src="{{asset('js/backend_js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js')}}"></script>
<script src="{{asset('js/backend_js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('js/backend_js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js')}}"></script>
<script src="{{asset('js/backend_js/lib/datatables/datatables-init.js')}}/"></script>

<!--Modal-->
<script src="{{asset('js/backend_js/lib/animatedModal/animatedModal.js-master/animatedModal.min.js')}}"></script>
<script src="{{asset('js/backend_js/lib/animatedModal/animatedModal.js-master/animatedModal.js')}}"></script>

<!--Sweet alert -->
<script src="{{asset('js/backend_js/lib/sweetalert/sweetalert.min.js')}}"></script>
<script src="{{asset('js/backend_js/lib/sweetalert/sweetalert.init.js')}}"></script>


</body>
</html>