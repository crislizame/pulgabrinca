<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
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
    <link rel="stylesheet" href="{{asset('assets/css/color.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <script src="{{asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    @yield("styles")
</head>
<body class="tg-home tg-homeone">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
{{--<div class="wrapper sidebar_minimize">--}}
<!--************************************
			Wrapper Start
	*************************************-->
<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
    @include('vistas.include.header')
        @if(request()->routeIs('home'))
            <!--************************************
				Home Slider Start
		*************************************-->
                <div id="tg-homebanner" class="tg-homebanner tg-haslayout">
                    <figure class="item" data-vide-bg="poster: {{asset('assets/images/slider/img-01.jpg')}}" data-vide-options="position: 50% 50%">
                        <figcaption>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="tg-bannercontent">
                                            <h1>World’s Largest Marketplace</h1>
                                            <h2>Search from 12,45,754 Awesome Verified Ads!</h2>
                                            <form class="tg-formtheme tg-formbannersearch">
                                                <fieldset>
                                                    <div class="form-group tg-inputwithicon">
                                                        <i class="icon-bullhorn"></i>
                                                        <input type="text" name="customword" class="form-control" placeholder="What are you looking for">
                                                    </div>
                                                    <div class="form-group tg-inputwithicon">
                                                        <i class="icon-location"></i>
                                                        <a class="tg-btnsharelocation fa fa-crosshairs" href="javascript:void(0);"></a>
                                                        <input type="text" name="yourlocation" class="form-control" placeholder="Your Location">
                                                    </div>
                                                    <div class="form-group tg-inputwithicon">
                                                        <i class="icon-layers"></i>
                                                        <div class="tg-select">
                                                            <select>
                                                                <option value="none">Select Category</option>
                                                                <option value="none">Mobiles</option>
                                                                <option value="none">Electronics</option>
                                                                <option value="none">Vehicles</option>
                                                                <option value="none">Bikes</option>
                                                                <option value="none">Animals</option>
                                                                <option value="none">Furniture</option>
                                                                <option value="none">toys</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <button class="tg-btn" type="button">Search Now</button>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <!--************************************
                        Home Slider End
                *************************************-->
            @else
    <!--************************************
				Home Slider Start
		*************************************-->
        <div id="tg-innerbanner" class="tg-innerbanner tg-haslayout">
            <figure data-vide-bg="poster: {{asset('assets/images/slider/img-01.jpg')}}" data-vide-options="position: 50% 50%">
                <figcaption>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="tg-bannercontent">
                                    <form class="tg-formtheme tg-formbannersearch">
                                        <fieldset>
                                            <div class="form-group tg-inputwithicon">
                                                <i class="icon-bullhorn"></i>
                                                <input type="text" name="customword" class="form-control" placeholder="What are you looking for">
                                            </div>
                                            <div class="form-group tg-inputwithicon">
                                                <i class="icon-location"></i>
                                                <a class="tg-btnsharelocation fa fa-crosshairs" href="javascript:void(0);"></a>
                                                <input type="text" name="yourlocation" class="form-control" placeholder="Your Location">
                                            </div>
                                            <div class="form-group tg-inputwithicon">
                                                <i class="icon-layers"></i>
                                                <div class="tg-select">
                                                    <select>
                                                        <option value="none">Select Category</option>
                                                        <option value="none">Mobiles</option>
                                                        <option value="none">Electronics</option>
                                                        <option value="none">Vehicles</option>
                                                        <option value="none">Bikes</option>
                                                        <option value="none">Animals</option>
                                                        <option value="none">Furniture</option>
                                                        <option value="none">toys</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <button class="tg-btn" type="button">Search Now</button>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </figcaption>
            </figure>
            <div class="tg-breadcrumbarea">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <ol class="tg-breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li class="tg-active">Login/Register</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--************************************
                Home Slider End
        *************************************-->
        @endif
        <!--************************************
        Main Start
*************************************-->
        <main id="tg-main" class="tg-main tg-haslayout">
            @yield('content')

        </main>
        <!--************************************
                Main End
        *************************************-->
    @include('vistas.include.footer')
</div>
<!--************************************
        Wrapper End
*************************************-->
<!--************************************
        Theme Modal Box Start
*************************************-->
<div id="tg-modalselectcurrency" class="modal fade tg-thememodal tg-modalselectcurrency" tabindex="-1" role="dialog">
    <div class="modal-dialog tg-thememodaldialog" role="document">
        <button type="button" class="tg-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <div class="modal-content tg-thememodalcontent">
            <div class="tg-title">
                <strong>Change Currency</strong>
            </div>
            <form class="tg-formtheme tg-formselectcurency">
                <fieldset>
                    <div class="form-group">
                        <div id="tg-flagstrapone" class="tg-flagstrap" data-input-name="country"></div>
                    </div>
                    <div class="form-group">
                        <button class="tg-btn" type="button">Change Now</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<div id="tg-modalpriceconverter" class="modal fade tg-thememodal tg-modalpriceconverter" tabindex="-1" role="dialog">
    <div class="modal-dialog tg-thememodaldialog" role="document">
        <button type="button" class="tg-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <div class="modal-content tg-thememodalcontent">
            <div class="tg-title">
                <strong>Currency Converter</strong>
            </div>
            <form class="tg-formtheme tg-formcurencyconverter">
                <fieldset>
                    <div class="form-group">
                        <div id="tg-flagstraptwo" class="tg-flagstrap" data-input-name="country"></div>
                        <div class="tg-curencyrateetc">
                            <span>120<sup>$</sup></span>
                            <p>1 USD = 0.784769 GBP</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <span class="tg-iconseprator"><i><img src="images/icons/img-36.png" alt="image description"></i></span>
                    </div>
                    <div class="form-group">
                        <div id="tg-flagstrapthree" class="tg-flagstrap" data-input-name="country"></div>
                        <div class="tg-curencyrateetc">
                            <span>94.1723<sup>£</sup></span>
                            <p>1 GBP = 1.27426 USD</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <span class="tg-lastupdate">Last update on <time datetime="2017-08-08">2017-06-12 12:35 local time</time></span>
                    </div>
                    <div class="form-group">
                        <button class="tg-btn" type="button">Convert Now</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<!--************************************
        Theme Modal Box End
*************************************-->
<!--************************************
			Theme Modal Box End
	*************************************-->
<script src="{{asset('assets/js/vendor/jquery-library.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
{{--<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&language=en"></script>--}}
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
@yield("styles")
</body>
</html>
