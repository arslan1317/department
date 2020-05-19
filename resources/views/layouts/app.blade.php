<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Energy</title>
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
    <div class="page ttm-sidebar-true">
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
                                <li><strong><i class="fa fa-phone"></i>Talk To Expert :</strong> <span class="tel-no">{{$basic_info->phone}}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ttm-header-wrap">
                <div class="container">
                    <div class="ttm-header-top-wrapper clearfix">
                        <div class="site-branding">
                            <a class="home-link" href="{{url('/')}}" title="Tectxon" rel="home">
                                <!-- <img id="logo-img" class="img-center" src="" alt="logo-img"> -->
                                YOUR LOGO
                            </a>
                        </div>
                        <div id="ttm-stickable-header-w" class="ttm-stickable-header-w clearfix">
                            <div id="site-header-menu" class="site-header-menu">
                                <div class="site-header-menu-inner ttm-stickable-header visible-title">
                                    <div class="container">
                                        <div id="site-navigation" class="site-navigation">
                                            <div class="ttm-menu-toggle">
                                                <input type="checkbox" id="menu-toggle-form">
                                                <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                                    <span class="toggle-block toggle-blocks-1"></span>
                                                    <span class="toggle-block toggle-blocks-2"></span>
                                                    <span class="toggle-block toggle-blocks-3"></span>
                                                </label>
                                            </div>
                                            <nav id="menu" class="menu">
                                                <ul class="dropdown">
                                                    <li class="active"><a href="{{url('/')}}">Home</a>
                                                    </li>
                                                    @foreach($all_department as $all_departments)
                                                    <li class="has-submenu"><a href="#">{{$all_departments->name}}</a>
                                                        <ul class="sub-menu">
                                                        @foreach($all_departments->subdepartment as $subdepartments)
                                                            <li><a href="#">{{$subdepartments->name}}</a></li>
                                                        @endforeach
                                                        </ul>
                                                    </li>
                                                    @endforeach
                                                    <li class=""><a href="{{url('/news')}}">News</a>
                                                    </li>
                                                    <li class=""><a href="{{url('/events')}}">Events</a>
                                                    </li>
                                                    <li class=""><a href="element.html">Sources</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="ttm-rt-contact">
                                            <!-- header-icins -->
                                            <div class="ttm-header-icons ">
                                                <div class="ttm-header-icon ttm-header-search-link"><a href="#" class="sclose"><i class="fa fa-search"></i></a>
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
                                    <p>{{$basic_info->phone}}</p>
                                    <a class="ttm-btn btn-inline style2" href="#">Contact Us</a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 widget-area">
                                <div class="widget widget-out-link clearfix">
                                    <i class="fa fa-envelope-o"></i>
                                    <h3 class="widget-title">Need support? Drop us an email</h3>
                                    <p>{{$basic_info->email}}</p>
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
                                    <p>{{$basic_info->footer_text}}</p>
                                    <ul class="widget-contact mt-25">
                                        <li><i class="ti ti-mobile"></i>{{$basic_info->phone}}</li>
                                        <li><i class="ti ti-comment"></i><a href="#">{{$basic_info->email}}</a></li>
                                        <li><i class="ti ti-location-pin"></i>{{$basic_info->address}}</li>
                                    </ul>
                                    <div class="social-icons social-hover mt-15">
                                        <ul class="list-inline">
                                        @foreach($social_icons as $social_icon)
                                            <li>
                                                <a href="{{$social_icon->link}}" target="blank">{!!$social_icon->icon!!}</a>
                                            </li>
                                        @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 widget-area">
                                <div class="widget style2 widget-out-link clearfix">
                                    <h3 class="widget-title">Our Services</h3>
                                    <ul id="menu-footer-services">
                                    @foreach($all_department as $all_departments)
                                    <li><a href="#" class="main">{{$all_departments->name}}</a></li>
                                        @foreach($all_departments->subdepartment as $subdepartments)
                                            <li><a href="#">{{$subdepartments->name}}</a></li>
                                        @endforeach
                                    </li>
                                    @endforeach
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
                                        @foreach($latest_news as $latest_new)
                                        <li>
                                            <a href="#"><img class="img-fluid" src="{{ asset('images') }}/{{$latest_new->image}}" alt="{{$latest_new->headline}}"></a>
                                            <a href="#">{{$latest_new->headline}}</a>
                                            <span class="post-date clearfix">{{$latest_new->created_at->format('M d, Y')}}</span>
                                        </li>
                                        @endforeach
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
                                    <span>{{$basic_info->copyright}}</span></div>
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
