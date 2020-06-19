<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vertical-menu-modern.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/datatables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/summernote.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css') }}">

</head>
<body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-lg-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item mr-auto">
                        <a class="nav-item m-auto" href="{{url('/')}}">
                            <!-- <img class="brand-logo" alt="modern admin logo" src="../../../app-assets/images/logo/logo.png"> -->
                            <img class="brand-logo" alt="modern admin logo" src="{{asset('images')}}/{{$basic_info->logo}}">
                        </a>
                    </li>
                    <li class="nav-item d-lg-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                        <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                            <div class="search-input">
                                <input class="input" type="text" placeholder="Explore Modern..." tabindex="0" data-search="template-list">
                                <div class="search-input-close"><i class="ft-x"></i></div>
                                <ul class="search-list"></ul>
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="mr-1 user-name text-bold-700">{{ Auth::user()->name }}</span><span class="avatar avatar-online"><img src="{{ asset('admin/images/avatar-s-19.png') }}" alt="avatar"><i></i></span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{route('profile.home')}}"><i class="ft-user"></i> Edit Profile</a>
                                <a class="dropdown-item" href="{{route('password.home')}}"><i class="ft-lock"></i> Change Password</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="ft-power"></i> Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item {{ (request()->is('user/dashboard')) ? 'active' : '' }}">
                    <a href="{{url('user/dashboard')}}">
                        <i class="la la-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span>
                    </a>
                </li>

                <li class=" nav-item"><a href="#"><i class="la la-briefcase"></i><span class="menu-title" data-i18n="Events">{{$subdepartment->department->name}}</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="#"><i></i><span data-i18n="{{$subdepartment->name}}">{{$subdepartment->name}}</span></a>
                            <ul class="menu-content">
                                <li class="{{ (request()->is('user/news')) ? 'active' : '' }}">
                                    <a href="{{route('news.home')}}" class="menu-item"><i></i><span data-il8n="{{$subdepartment->name}}">News</span></a>
                                </li>
                                <li class="{{ (request()->is('user/events')) ? 'active' : '' }}">
                                    <a href="{{route('events.home')}}" class="menu-item"><i></i><span data-il8n="{{$subdepartment->name}}">Events</span></a>
                                </li>
                                <li class="{{ (request()->is('user/source')) ? 'active' : '' }}">
                                    <a href="{{route('source.home')}}" class="menu-item"><i></i><span data-il8n="{{$subdepartment->name}}">Sources</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>

    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-1">
                    <h3 class="content-header-title">{{$title}}</h3>
                </div>
                <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-12">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a>
                            </li>
                            {!!$lefttitle!!}
                    </div>
                </div>
            </div>
            @yield('content')
        </div>
    </div>

    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2020 <a class="text-bold-800 grey darken-2 text-uppercase" href="#" target="_blank">imaginic solution</a></span><span class="float-md-right d-none d-lg-block">Hand-crafted & Made with<i class="ft-heart pink"></i><span id="scroll-top"></span></span></p>
    </footer>

    <script src="{{ asset('admin/js/vendors.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/toastr.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/app-menu.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/customizer.min.js') }}"></script>
    <script src="{{ asset('admin/js/footer.min.js') }}"></script>
    <script src="{{ asset('admin/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('admin/js/form-select2.min.js') }}"></script>
    <script src="{{ asset('admin/js/datatables.min.js') }}"></script>
    <script src="{{ asset('admin/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/js/datatable-advanced.min.js') }}"></script>
    <script src="{{ asset('admin/js/summernote.js') }}"></script>
    <script src="{{ asset('admin/js/moment-with-locales.min.js') }}"></script>
    <script src="{{ asset('admin/js/daterangepicker.js') }}"></script>
    <script src="{{ asset('admin/js/chart.min.js') }}"></script>
    <script src="{{ asset('admin/js/user-js.js') }}"></script>
    <script>
        @if(session()->get('notifysuccess'))
            toastr.success("{{ session()->get('notifysuccess') }}");
        @endif

        @if(Session::has('info'))
            toastr.info("{{ Session::get('info') }}");
        @endif

        @if(Session::has('warning'))
            toastr.warning("{{ Session::get('warning') }}");
        @endif

        @if(Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
        @endif
    </script>
</body>
</html>
