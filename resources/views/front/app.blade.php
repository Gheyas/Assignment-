<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('back/images/ncg.ico')}}">
    <!-- Font Icons -->
    <link media="all" rel="stylesheet" href="{{asset('front/css/fonts/icomoon/icomoon.css')}}">
    <link media="all" rel="stylesheet" href="{{asset('front/css/fonts/roxine-font-icon/roxine-font.css')}}">
    <link media="all" rel="stylesheet" href="{{asset('front/vendors/font-awesome/css/font-awesome.css')}}">
    <!-- Vendors -->
    <link media="all" rel="stylesheet" href="{{asset('front/vendors/owl-carousel/dist/assets/owl.carousel.min.css')}}">
    <link media="all" rel="stylesheet" href="{{asset('front/vendors/owl-carousel/dist/assets/owl.theme.default.min.css')}}">
    <link media="all" rel="stylesheet" href="{{asset('front/vendors/animate/animate.css')}}">
    <link media="all" rel="stylesheet" href="{{asset('front/vendors/rateyo/jquery.rateyo.css')}}">
    <link media="all" rel="stylesheet" href="{{asset('front/vendors/bootstrap-datepicker/css/bootstrap-datepicker.css')}}">
    <link media="all" rel="stylesheet" href="{{asset('front/vendors/fancyBox/source/jquery.fancybox.css')}}">
    <link media="all" rel="stylesheet" href="{{asset('front/vendors/fancyBox/source/helpers/jquery.fancybox-thumbs.css')}}">
    <!-- Bootstrap 4 -->
    <link media="all" rel="stylesheet" href="{{asset('front/css/bootstrap.css')}}">
    <!-- Rev Slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/vendors/rev-slider/revolution/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/vendors/rev-slider/revolution/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/vendors/rev-slider/revolution/css/navigation.css')}}">
    <!-- Theme CSS -->
    <link media="all" rel="stylesheet" href="{{asset('front/css/main.css')}}">
    <!-- Custom CSS -->
    <link media="all" rel="stylesheet" href="{{asset('front/css/custom.css')}}">
    <style>
        h2 {
            font-family: Josefin Sans;
        }
        h3 {
            font-family: poppins;
        }
        h1, h2 {
            text-transform: uppercase !important;
        }
    </style>
</head>

<body>
    <!-- main wrapper -->
    <div id="wrapper">
        <div class="page-wrapper">
            <!-- header of the page -->
            <header class="fixed-top main-header header-white @if(Route::currentRouteName() != 'contact.index'  && Route::currentRouteName() != 'privacy' && Route::currentRouteName() != 'terms') transparent @endif" id="waituk-main-header">
                <div id="nav-section">
                    <div class="bottom-header container-fluid mega-menus" id="mega-menus">
                        <nav class="navbar navbar-toggleable-md no-border-radius no-margin mega-menu-multiple" id="navbar-inner-container">
                            <button type="button" class="navbar-toggler navbar-toggler-left" data-toggle="collapse" data-target="#mega-menu">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <a class="navbar-brand mr-auto m-sm-auto" href="{{route('home')}}"> 
                            @if(Route::currentRouteName() != 'contact.index' && Route::currentRouteName() != 'privacy' && Route::currentRouteName() != 'terms')  
                            <img src="{{asset('back/images/logo-w.png')}}" alt="NCG" style="width:320px;">
                            @endif
                            <img src="{{asset('back/images/logo.png')}}" alt="NCG" style="width:320px;">
                         </a>
                            <div class="collapse navbar-collapse flex-row-reverse" id="mega-menu">
                                <ul class="nav navbar-nav">
                                    <li>
                                        <a href="{{route('home')}}"> Home </a>
                                    </li>
                                    <li class="dropdown left-dropdown" data-animation="fadeIn">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="{{route('about.show', $abouts->first()->id)}}" data-title="Home"> About Us </a>
                                        <ul class="dropdown-menu no-border-radius fadeIn animated">
                                            @foreach($abouts as $about)
                                            <li><a href="{{route('about.show', $about)}}">{{$about->title}}</a></li>
                                            @endforeach
                                            <li><a href="{{route('team.index')}}">Our Team</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{route('product.index')}}"> Covid 19 Products </a>
                                    </li>
                                    <li>
                                        <a href="{{route('service.index')}}"> Services </a>
                                    </li>
                                    <li>
                                        <a href="{{route('business.index')}}"> Business </a>
                                    </li>
                                    <li>
                                        <a href="{{route('contact.index')}}"> Contact </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>
            <!--/header of the page -->
            <main @if(Route::currentRouteName() == 'contact.index') class="no-banner" @endif>
                @yield('content')
            </main>
        </div>
        <!-- footer of the pagse -->
        <footer class="footer footer-v1">
            <div class="content-block footer-main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <ul class="social-network with-text">
                                <li><a href="{{$info->fb}}"><span class="icon-facebook"></span></a></li>
                                <li><a href="{{$info->tw}}"><span class="icon-twitter"></span></a></li>
                                <li><a href="{{$info->ig}}"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <div class="footer-nav inline-nav text-center">
                                <ul>
                                    <li><a href="{{route('home')}}">Home</a></li>
                                    <li><a href="{{route('about.show', $abouts->first())}}">About</a></li>
                                    <li><a href="{{route('product.index')}}">Products</a></li>
                                    <li><a href="{{route('service.index')}}">Services</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="footer-logo text-right">
                                <img src="{{asset('back/images/logo.png')}}" alt="NCG" style="width: 320px; margin-top: -20px; ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom text-center">
                <div class="container">
                    <p>Copyright @ 2020 - NCG-Response | <a href="{{route('terms')}}" style="color: #4b5e8a;">Terms of Service</a> & <a href="{{route('privacy')}}" style="color: #4b5e8a;">Privacy Policy</a> | Powered By: Gheyas Shahab</p>
                </div>
            </div>
        </footer>
        <!--/footer of the page -->
    </div>

     <a href="#" class="section-scroll" id="scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- jquery library -->
    <script src="{{asset('front/vendors/jquery/jquery-2.1.4.min.js')}}"></script>
    <!-- external scripts -->
    <script src="{{asset('front/vendors/tether/dist/js/tether.min.js')}}"></script>
    <script src="{{asset('front/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/vendors/stellar/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('front/vendors/isotope/javascripts/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('front/vendors/isotope/javascripts/packery-mode.pkgd.js')}}"></script>
    <script src="{{asset('front/vendors/owl-carousel/dist/owl.carousel.js')}}"></script>
    <script src="{{asset('front/vendors/waypoint/waypoints.min.js')}}"></script>
    <script src="{{asset('front/vendors/counter-up/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('front/vendors/fancyBox/source/jquery.fancybox.pack.js')}}"></script>
    <script src="{{asset('front/vendors/fancyBox/source/helpers/jquery.fancybox-thumbs.js')}}"></script>
    <script src="{{asset('front/vendors/image-stretcher-master/image-stretcher.js')}}"></script>
    <script src="{{asset('front/vendors/wow/wow.min.js')}}"></script>
    <script src="{{asset('front/vendors/rateyo/jquery.rateyo.js')}}"></script>
    <script src="{{asset('front/vendors/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('front/vendors/bootstrap-slider-master/src/js/bootstrap-slider.js')}}"></script>
    <script src="{{asset('front/vendors/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('front/js/mega-menu.js')}}"></script>
    <!-- custom jquery script -->
    <script src="{{asset('front/js/jquery.main.js')}}"></script>
    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="{{asset('front/vendors/rev-slider/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/vendors/rev-slider/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="{{asset('front/vendors/rev-slider/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/vendors/rev-slider/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/vendors/rev-slider/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/vendors/rev-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/vendors/rev-slider/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/vendors/rev-slider/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/vendors/rev-slider/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/vendors/rev-slider/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/vendors/rev-slider/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
    <!-- SNOW ADD ON -->
    <script type="text/javascript" src="{{asset('front/vendors/rev-slider/revolution-addons/snow/revolution.addon.snow.min.js')}}"></script>
        <!-- revolutions slider script -->
    <script src="{{asset('front/js/revolution.js')}}"></script>
</html>
