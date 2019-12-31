<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BootStrap HTML5 CSS3 Theme</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/transitions.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flags.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/prettyPhoto.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/chartist.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/color.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/dbresponsive.css')}}">
    <script src="{{asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    @yield('styles')
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!--************************************
        Wrapper Start
*************************************-->
<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
@include('vistas.include.includedash.header')
<!--************************************
				Main Start
		*************************************-->
    <main id="tg-main" class="tg-main tg-haslayout">
    @yield('content')
    </main>
    <!--************************************
            Main End
    *************************************-->

<!--************************************
				Footer Start
		*************************************-->
@include('vistas.include.includedash.footer')

    <!--************************************
            Footer End
    *************************************-->
</div>
<!--************************************
			Wrapper End
*************************************-->

<script src="{{asset('assets/js/vendor/jquery-library.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
{{--<script src="http://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&language=en"></script>--}}
<script src="{{asset('assets/js/tinymce/tinymce.min.js?apiKey=4cuu2crphif3fuls3yb1pe4qrun9pkq99vltezv2lv6sogci')}}"></script>
<script src="{{asset('assets/js/responsivethumbnailgallery.js')}}"></script>
<script src="{{asset('assets/js/jquery.flagstrap.min.js')}}"></script>
<script src="{{asset('assets/js/backgroundstretch.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.vide.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.collapse.js')}}"></script>
<script src="{{asset('assets/js/scrollbar.min.js')}}"></script>
<script src="{{asset('assets/js/chartist.min.js')}}"></script>
<script src="{{asset('assets/js/prettyPhoto.js')}}"></script>
<script src="{{asset('assets/js/jquery-ui.js')}}"></script>
<script src="{{asset('assets/js/countTo.js')}}"></script>
<script src="{{asset('assets/js/appear.js')}}"></script>
<script src="{{asset('assets/js/gmap3.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
@yield('script')
</body>
</html>
