<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lucknauth Car Rental</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('css/backend_css/lib/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset ('Vendors/bootstrap-select/css/bootstrap-select.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset ('Vendors/font-awesome/css/font-awesome.min.css')}}">
    <!-- Google fonts --->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <!-- owl carousel-->
    <link rel="stylesheet" href="{{asset('css/backend_css/lib/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/backend_css/lib/owl.theme.default.min.css')}}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset ('css/frontend_css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="{{asset ('css/frontend_css/Stripe.css')}}">
    <link rel="stylesheet" href="{{asset ('Vendors/air-datepicker/css/datepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset ('Vendors/timepicki/css/timepicki.css')}}">
    <link rel="stylesheet" href="{{asset ('Vendors/timepicki/css/timepicki.css')}}">
    <link rel="stylesheet" href="{{asset ('css/frontend_css/Components/DatepickerCustom.css')}}">
    <script src="https://js.stripe.com/v3/"></script>
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
<div id="all">

    @include('layouts.FrontLayout.Front_header')
    @yield('content')
    @include('layouts.FrontLayout.Front_footer')

</div>

<!-- Javascript files-->
<script src="{{asset('js/backend_js/lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('js/backend_js/lib/bootstrap/js/popper.min.js')}}"> </script>
<script src="{{asset('js/backend_js/lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset ('Vendors/jquery.cookie/jquery.cookie.js')}}"> </script>
<script src="{{asset ('Vendors/waypoints/lib/jquery.waypoints.min.js')}}"> </script>
<script src="{{asset ('Vendors/jquery.counterup/jquery.counterup.min.js')}}"> </script>
<script src="{{asset('js/backend_js/lib/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset ('Vendors/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js')}}"></script>
<script src="{{asset ('js/frontend_js/jquery.parallax-1.1.3.js')}}"></script>
<script src="{{asset ('Vendors/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset ('Vendors/jquery.scrollto/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset ('js/frontend_js/front.js')}}"></script>
<script src="{{asset ('js/frontend_js/gmaps.js')}}"></script>
<script src="{{asset ('js/frontend_js/gmaps.init.js')}}"></script>
<script src="{{asset ('js/frontend_js/bootstrap-datetimepicker.js')}}"></script>
<script src="{{asset ('js/frontend_js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{asset ('js/frontend_js/Stripe.js')}}"></script>
<script src="{{asset ('Vendors/air-datepicker/js/datepicker.js')}}"></script>
<script src="{{asset ('Vendors/air-datepicker/js/datepicker.min.js')}}"></script>
<script src="{{asset ('Vendors/air-datepicker/js/i18n/datepicker.en.js')}}"></script>
<script src="{{asset ('Vendors/timepicki/js/timepicki.js')}}"></script>
<script src="{{asset ('js/frontend_js/Days.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/staticmap?center=Brooklyn+Bridge,New+York,NY&zoom=13&size=600x300&maptype=roadmap
&markers=color:blue%7Clabel:S%7C40.702147,-74.015794&markers=color:green%7Clabel:G%7C40.711614,-74.012318
&markers=color:red%7Clabel:C%7C40.718217,-73.998284
&key=AIzaSyDXeQZJnwJDI2g25S0hnJiFeb4p5eYnwjc"></script>
</body>
</html>