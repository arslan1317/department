<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/animate.css') }}" /> 
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/font-awesome.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/themify-icons.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/flaticon.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/prettyPhoto.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/shortcodes.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/main.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/color-switcher.css') }}">
    <link id="switcher-color" href="{{ asset('front/css/default-color.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/responsive.css') }}" />
</head>
<body>
    <!-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <ul class="navbar-nav ml-auto">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> -->
    <div class="page">
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>

        <header id="masthead" class="header ttm-header-style-infostack">
            <div class="ttm-topbar-wrapper ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
                <div class="container">
                    <div class="ttm-topbar-content">
                        <ul class="top-contact text-left">
                            <li class="list-inline-item">Your Trusted 24 Hours Service Provider!</li>
                        </ul>
                        <div class="topbar-right text-right">
                            <div class="ttm-social-links-wrapper list-inline">
                                <ul class="social-icons">
                                    @foreach($social_icons as $social_icon)
                                        <li>
                                            <a href="{{$social_icon->link}}" target="blank">{!!$social_icon->icon!!}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <ul class="top-contact ttm-highlight">
                                <li><strong><i class="fa fa-phone"></i>Talk To Expert :</strong> <span class="tel-no">0 (143) 456 7897</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ttm-header-wrap">
                <div class="container">
                    <div class="ttm-header-top-wrapper clearfix">
                        <div class="site-branding">
                            <a class="home-link" href="" title="Tectxon" rel="home">
                                <!-- <img id="logo-img" class="img-center" src="" alt="logo-img"> -->
                                YOUR LOGO
                            </a>
                        </div>
                        <div class="ttm-top-info-con">
                            <ul>
                                <li>
                                    <div class="icon-box icon-style-border">
                                        <i class="ti ti-mobile"></i>
                                    </div>
                                    <div class="title-box">
                                        <h5>Call</h5>
                                        <p>+123 4567 8910</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-box icon-style-border">
                                        <i class="ti ti-comment-alt"></i>
                                    </div>
                                    <div class="title-box">
                                        <h5>Email</h5>
                                        <p>info@example.com</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-box icon-style-border">
                                        <i class="ti ti-location-pin"></i>
                                    </div>
                                    <div class="title-box">
                                        <h5>Address</h5>
                                        <p>24 Fifth st, Los Angeles, USA</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="ttm-stickable-header-w" class="ttm-stickable-header-w clearfix">
                        <div id="site-header-menu" class="site-header-menu">
                            <div class="site-header-menu-inner ttm-stickable-header">
                                <div class="container">
                                    <div id="site-navigation" class="site-navigation">
                                        <div class="ttm-menu-toggle">
                                            <input type="checkbox" id="menu-toggle-form" />
                                            <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                                <span class="toggle-block toggle-blocks-1"></span>
                                                <span class="toggle-block toggle-blocks-2"></span>
                                                <span class="toggle-block toggle-blocks-3"></span>
                                            </label>
                                        </div>
                                        <nav id="menu" class="menu">
                                            <ul class="dropdown">
                                                <li class="active"><a href="index.html">Home</a>
                                                    <ul>
                                                        <li><a href="index.html">Home Classic</a></li>
                                                        <li><a href="home-2.html">Home Classic 2 <span class="label-new">New</span></a></li>
                                                        <li class="active"><a href="home-3.html">Home Corporate</a></li>
                                                        <li><a href="home-4.html">Home Creative</a></li>
                                                        <li><a href="home-one-page.html">Home One Page <span class="label-new">New</span></a></li>
                                                        <li><a href="#">Header Styles</a>
                                                            <ul>
                                                                <li><a href="index.html">Header Infostack</a></li>
                                                                <li><a target="_blank" href="header-classic.html">Header Classic</a></li>
                                                                <li><a target="_blank" href="header-overlay.html">Header Overlay</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Pages</a>
                                                    <ul>
                                                        <li><a href="aboutus-1.html">About Us 1</a></li>
                                                        <li><a href="aboutus-2.html">About Us 2</a></li>
                                                        <li><a href="services-1.html">Service 1</a></li>
                                                        <li><a href="services-2.html">Service 2</a></li>
                                                        <li><a href="our-team.html">Our Team</a></li>
                                                        <li><a href="contact-us.html">Contact Us</a></li>
                                                        <li><a href="#">Shop</a>
                                                            <ul>
                                                                <li><a href="home-shop.html">Home Shop</a></li>
                                                                <li><a href="shop.html">Default Shop</a></li>
                                                                <li><a href="product-details.html">Single Product Details</a></li>
                                                                <li><a href="cart.html">Cart</a></li>
                                                                <li><a href="checkout.html">Checkout</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="faq.html">FAQs</a></li>
                                                        <li><a href="error.html">Error Page</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Services</a>
                                                    <ul>
                                                        <li><a href="oil-and-gas.html">Oil &amp; Gas</a></li>
                                                        <li><a href="chemical-research.html">Chemical Research</a></li>
                                                        <li><a href="agricultural-research.html">Agricultural Research</a></li>
                                                        <li><a href="mechanical-civil.html">Mechanical &amp; Civil</a></li>
                                                        <li><a href="auto-motive-engineering.html">Auto Motive Engineering</a></li>
                                                        <li><a href="manufacturing.html">Manufacturing</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Projects</a>
                                                    <ul>
                                                        <li><a href="portfolio-classic.html">Project Classic</a></li>
                                                        <li><a href="portfolio-overlay.html">Project Overlay</a></li>
                                                        <li><a href="portfolio-full-width.html">Project Full Width</a></li>
                                                        <li><a href="#">Project Single</a>
                                                            <ul>
                                                                <li><a href="portfolio-details-01.html">Style One</a></li>
                                                                <li><a href="portfolio-details-02.html">Style Two</a></li>
                                                                <li><a href="portfolio-details-03.html">Style Three</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="element.html">Elements</a></li>
                                                <li><a href="#">Blog</a>
                                                    <ul>
                                                        <li><a href="blog.html">Blog Classic</a></li>
                                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                                        <li><a href="single-blog.html">Single Blog</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="ttm-rt-contact">
                                        <!-- header-icins -->
                                        <div class="ttm-header-icons ">
                                            <div class="ttm-header-icon ttm-header-search-link"><a href="#"><i class="fa fa-search"></i></a>
                                                <div class="ttm-search-overlay">
                                                    <form method="get" class="ttm-site-searchform" action="#">
                                                        <div class="w-search-form-h">
                                                            <div class="w-search-form-row">
                                                                <div class="w-search-input">
                                                                    <input type="search" class="field searchform-s" name="s" placeholder="Type Word Then Enter...">
                                                                    <button type="submit">
                                                                        <i class="ti ti-search"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- header-icons end -->
                                        <div class="ttm-custombutton">
                                            <a href="contact-us.html">Get a Quote<i class="fa fa-caret-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @yield('content')

            <footer class="footer widget-footer clearfix">
                <div class="first-footer bg-img7 ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey">
                    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 widget-area">
                                <div class="widget widget-out-link clearfix">
                                    <i class="fa fa-phone"></i>
                                    <h3 class="widget-title">Have a question? call us now</h3>
                                    <p>Office 1: +(03) 0106 387 4456</p>
                                    <a class="ttm-btn btn-inline style2" href="#">Contact Us</a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 widget-area">
                                <div class="widget widget-out-link clearfix">
                                    <i class="fa fa-envelope-o"></i>
                                    <h3 class="widget-title">Need support? Drop us an email</h3>
                                    <p>info@domainname.com</p>
                                    <a class="ttm-btn btn-inline style2" href="#">Fill Our Form</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="second-footer ttm-textcolor-dark">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-4 widget-area">
                                <div class="widget style2 widget-out-link clearfix">
                                    <div class="footer-logo">
                                        <!-- <img id="footer-logo-img" class="img-center" src="images/footer-logo.png" alt=""> -->
                                        Footer Logo
                                    </div>
                                    <br>
                                    <p>Tectxon has very good strength in innovative technology and tools with over 35 years of experience. We makes long-term investments goal in global companies in different sectors, mainly in Europe and other countries.</p>
                                    <ul class="widget-contact mt-25">
                                        <li><i class="ti ti-mobile"></i>(+01) 123 456 7890</li>
                                        <li><i class="ti ti-comment"></i><a href="#">info@example.com</a></li>
                                        <li><i class="ti ti-location-pin"></i>Evanto HQ 24 Fifth st., Los Angeles, USA</li>
                                    </ul>
                                    <div class="social-icons social-hover mt-15">
                                        <ul class="list-inline">
                                            <li class="social-facebook"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li class="social-twitter"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li class="social-gplus"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="Google+"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                            <li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="" data-tooltip="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 widget-area">
                                <div class="widget style2 widget-out-link clearfix">
                                    <h3 class="widget-title">Our Services</h3>
                                    <ul id="menu-footer-services">
                                        <li><a href="#">Oil &amp; Gas Engineering</a></li>
                                        <li><a href="#">Manufacturing</a></li>
                                        <li><a href="#">Chemical Research</a></li>
                                        <li><a href="#">Auto Motive</a></li>
                                        <li><a href="#">Agricultural</a></li>
                                        <li><a href="#">Mechanical</a></li>
                                    </ul>
                                </div>
                                <div class="widget style2 widget-out-link clearfix">
                                    <h3 class="widget-title">Newsletter</h3>
                                    <p>Subscribe to our newsletter to receive latest news on our services.</p>
                                    <form id="subscribe-form" method="post" action="#" data-mailchimp="true">
                                        <div class="mailchimp-inputbox clearfix" id="subscribe-content">
                                            <p>
                                                <i class="fa fa-envelope-o"></i>
                                                <input type="email" name="email" placeholder="Email Addess.." required="">
                                            </p>
                                            <p>
                                                <button class="form-btn" type="submit" title="Send" value="Send">Join</button>
                                            </p>
                                        </div>
                                        <div id="subscribe-msg"></div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 widget-area">
                                <div class="widget style2 widget-out-link clearfix">
                                    <h3 class="widget-title">Latest News</h3>
                                    <ul class="widget-post ttm-recent-post-list mt-15">
                                        <li>
                                            <a href="single-blog.html"><img src="{{ asset('front/images/01.jpg') }}" alt="post-img"></a>
                                            <a href="single-blog.html">We are best for any industrial & business solution.</a>
                                            <span class="post-date clearfix">August 1, 2018</span>
                                        </li>
                                        <li>
                                            <a href="single-blog.html"><img src="{{ asset('front/images/02.jpg') }}" alt="post-img"></a>
                                            <a href="single-blog.html">We won best industry award of the year 2017 & 18.</a>
                                            <span class="post-date clearfix">August 1, 2018</span>
                                        </li>
                                        <li>
                                            <a href="single-blog.html"><img src="{{ asset('front/images/03.jpg') }}" alt="post-img"></a>
                                            <a href="single-blog.html">10 reason why should choose our industry</a>
                                            <span class="post-date clearfix">August 05, 2018</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-footer-text ttm-bottom-footer-text ttm-bgcolor-darkgrey ttm-textcolor-white">
                    <div class="container">
                        <div class="row copyright">
                            <div class="col-md-6">
                                <div class=" ttm-footer2-left">
                                    <span>Copyright © 2019&nbsp;<a href="#">Tectxon</a>. All rights reserved.</span></div>
                            </div>
                            <div class="col-md-6 ttm-footer2-right">
                                <ul id="menu-footer-menu" class="footer-nav-menu">
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Supplier</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <a id="totop" href="#top">
                <i class="fa fa-angle-up"></i>
            </a>

        </div>

    <script src="{{ asset('front/js/jquery.min.js') }}"></script>
    <script src="{{ asset('front/js/tether.min.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.easing.js') }}"></script>
    <script src="{{ asset('front/js/jquery-waypoints.js') }}"></script>
    <script src="{{ asset('front/js/jquery-validate.js') }}"></script>
    <script src="{{ asset('front/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('front/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('front/js/numinate.min.js') }}"></script>
    <script src="{{ asset('front/js/main.js') }}"></script>
    <script src="{{ asset('front/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('front/js/slider.js') }}"></script>
    <script src="{{ asset('front/js/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('front/js/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('front/js/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('front/js/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('front/js/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('front/js/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('front/js/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('front/js/revolution.extension.slideanims.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('#department').on('change', function() {
              alert( this.value );
            });
        })
    </script>
</body>
</html>
