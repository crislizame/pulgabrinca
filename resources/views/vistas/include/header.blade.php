<!--************************************
        Header Startq
*************************************-->
<header id="tg-header" class="tg-header tg-haslayout">
    <div class="tg-topbar">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
{{--                    <ul class="tg-navcurrency">--}}
{{--                        <li><a href="#" data-toggle="modal" data-target="#tg-modalselectcurrency">select currency</a></li>--}}
{{--                        <li><a href="#" data-toggle="modal" data-target="#tg-modalpriceconverter">Price converter</a></li>--}}
{{--                    </ul>--}}

                    <div class="dropdown tg-themedropdown tg-userdropdown">
                        @if(!auth()->check())
                        <a class="tg-btn" href="{{route('login')}}" style="background-color: #dee347!important;color: #444!important;">
                            <i class="icon-user"></i>
                            <span>{{__('login.login/register')}}</span>
                        </a>
                        @else
                        <a href="javascript:void(0);" id="tg-adminnav" class="tg-btndropdown" data-toggle="dropdown">
                            <span class="tg-userdp"><img src="{{asset('assets/images/author/img-01.jpg')}}" alt="image description"></span>
                            <span class="tg-name">Hola! {{auth()->user()->name}}</span>
                            <span class="tg-role">{{auth()->user()->email}}</span>
                        </a>
                        <ul class="dropdown-menu tg-themedropdownmenu" aria-labelledby="tg-adminnav">
                            <li>
                                <a href="{{route("dashboard")}}">
                                    <i class="icon-chart-bars"></i>
                                    <span>Panel de control</span>
                                </a>
                            </li>
                            <li>
                                <a href="dashboard-profile-setting.html">
                                    <i class="icon-cog"></i>
                                    <span>Profile Settings</span>
                                </a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0);">
                                    <i class="icon-layers"></i>
                                    <span>My Ads</span>
                                </a>
                                <ul>
                                    <li><a href="dashboard-myads.html">All Ads</a></li>
                                    <li><a href="dashboard-myads.html">Featured Ads</a></li>
                                    <li><a href="dashboard-myads.html">Active Ads</a></li>
                                    <li><a href="dashboard-myads.html">Inactive Ads</a></li>
                                    <li><a href="dashboard-myads.html">Sold Ads</a></li>
                                    <li><a href="dashboard-myads.html">Expired Ads</a></li>
                                    <li><a href="dashboard-myads.html">Deleted Ads</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="dashboard-postanad.html">
                                    <i class="icon-layers"></i>
                                    <span>Dashboard Post Ad</span>
                                </a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0);">
                                    <i class="icon-envelope"></i>
                                    <span>Offers/Messages</span>
                                </a>
                                <ul>
                                    <li><a href="dashboard-offermessages.html">Offer Received</a></li>
                                    <li><a href="dashboard-offermessages.html">Offer Sent</a></li>
                                    <li><a href="dashboard-offermessages.html">Trash</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="dashboard-payments.html">
                                    <i class="icon-cart"></i>
                                    <span>Payments</span>
                                </a>
                            </li>
                            <li>
                                <a href="dashboard-myfavourites.html">
                                    <i class="icon-heart"></i>
                                    <span>My Favourite</span>
                                </a>
                            </li>
                            <li>
                                <a href="dashboard-privacy-setting.html">
                                    <i class="icon-star"></i>
                                    <span>Privacy Settings</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <i class="icon-exit"></i>
                                    <span>Logout</span>
                                </a>
                            </li>
                        </ul>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tg-navigationarea">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <strong class="tg-logo"><a href="{{route('home')}}"><img src="{{asset('assets/images/logo.png')}}"alt="company logo here"></a></strong>
                    <a class="tg-btn" href="#">
                        <i class="icon-bookmark"></i>
                        <span>crea un anuncio</span>
                    </a>
                    <nav id="tg-nav" class="tg-nav">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
                            <ul>
                                <li class="">
                                    <a  href="{{route('home')}}">Inicio</a>
{{--                                    <ul class="sub-amenu">--}}
{{--                                        <li><a href="index.html">Home V1</a></li>--}}
{{--                                        <li><a href="indexv2.html">Home V2</a></li>--}}
{{--                                    </ul>--}}
                                </li>
                                <li class="menu-item-has-children current-menu-item">
                                    <a href="javascript:void(0);">Listings</a>
                                    <ul class="sub-menu">
                                        <li><a href="adlistinggrid.html">Ad Grid</a></li>
                                        <li><a href="adlistinglist.html">Ad Listing</a></li>
                                        <li><a href="addetail.html">Listing Detail</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="javascript:void(0);">Dashboard</a>
                                    <ul class="sub-menu">
                                        <li><a href="dashboard.html">Dashboard</a></li>
                                        <li><a href="dashboard-myads.html">Dashboard My Ads</a></li>
                                        <li><a href="dashboard-myfavourites.html">Dashboard Favorites</a></li>
                                        <li><a href="dashboard-offermessages.html">Dashboard Offer Message</a></li>
                                        <li><a href="dashboard-payments.html">Dashboard Payment</a></li>
                                        <li><a href="dashboard-postanad.html">Dashboard Post Ad</a></li>
                                        <li><a href="dashboard-privacy-setting.html">Dashboard privacy Setting</a></li>
                                        <li><a href="dashboard-profile-setting.html">Dashboard Profile Setting</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="javascript:void(0);">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="aboutus.html">About</a></li>
                                        <li><a href="contactus.html">Contact Us</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="javascript:void(0);">News</a>
                                            <ul class="sub-menu">
                                                <li><a href="newsgrid.html">News grid</a></li>
                                                <li><a href="newslist.html">News list</a></li>
                                                <li><a href="newsdetail.html">News detail</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="404error.html">404 Error</a></li>
                                        <li><a href="comingsoon.html">Coming Soon</a></li>
                                        <li><a href="packages.html">Packages</a></li>
                                        <li><a href="loginsignup.html">Login/Register</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!--************************************
        Header End
*************************************-->
