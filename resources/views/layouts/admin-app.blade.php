<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Energy</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('images')}}/{{$basic_info->favicon}}" />
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
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/summernote.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/datatables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css') }}">
    <title>Energy</title>

</head>
<body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-lg-none m-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item m-auto">
                        <a class="navbar-brand" href="{{url('admin/dashboard')}}">
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
                        <li class="dropdown dropdown-notification nav-item">
                            <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                                <i class="ficon ft-file-text"></i>
                                <span class="badge badge-pill badge-info badge-up badge-glow">{{count($new_global_notify)}}</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0"><span class="grey darken-2">News</span></h6><span class="notification-tag badge badge-info float-right m-0">{{count($new_global_notify)}} New</span>
                                </li>
                                <li class="scrollable-container media-list w-100">
                                    @foreach($new_global_notify as $new_global_notifys)
                                    <div class="media">
                                        <div class="media-body">
                                            <h6 class="media-heading"><a href="{{route('news.single', ['depart'=>$new_global_notifys->subdepartment->department->name,'name'=>$new_global_notifys->subdepartment->name,'id'=>$new_global_notifys->id])}}">{{$new_global_notifys->headline}}</a></h6>
                                            <p class="notification-text font-small-3 text-muted">
                                            @php
                                                $content = strip_tags($new_global_notifys->body);
                                            @endphp
                                            {!! \Illuminate\Support\Str::limit($content, $limit = 15, $end = '...') !!}
                                            </p>
                                            <p class="notification-text font-small-3 text-muted">
                                                {{$new_global_notifys->user->name}} ({{$new_global_notifys->user->email}})
                                            </p>
                                            <small>
                                                    <time class="media-meta text-muted">
                                                        {{ Carbon\Carbon::parse($new_global_notifys->created_at)->diffForHumans()}}
                                                    </time>
                                            </small>
                                            <br>
                                        </div>
                                    </div>
                                    @endforeach
                                </li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="{{route('news.all')}}">Read all News</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-notification nav-item">
                            <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                                <i class="ficon ft-calendar"></i>
                                <span class="badge badge-pill badge-warning badge-up badge-glow">{{count($event_global_notify)}}</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Events</span></h6><span class="notification-tag badge badge-warning float-right m-0">{{count($event_global_notify)}} New</span>
                                </li>
                                <li class="scrollable-container media-list w-100">
                                    @foreach($event_global_notify as $event_global_notifys)
                                    <div class="media">
                                        <div class="media-body">
                                            <h6 class="media-heading"><a href="{{route('events.single', ['depart'=>$event_global_notifys->subdepartment->department->name,'name'=>$event_global_notifys->subdepartment->name,'id'=>$event_global_notifys->id])}}">{{$event_global_notifys->name}}</a></h6>
                                             <p class="notification-text font-small-3 text-muted">
                                                <strong>Start Date:</strong>
                                                {{date('M, d D Y h:m:s A', strtotime($event_global_notifys->start_date))}}
                                            </p>
                                            <p class="notification-text font-small-3 text-muted">
                                                <strong>End Date:</strong>
                                                {{date('M, d D Y h:m:s A', strtotime($event_global_notifys->end_date))}}</p>
                                            <p class="notification-text font-small-3 text-muted">
                                                {!!substr($event_global_notifys->body, 0, 15)!!}</p>
                                            <p class="notification-text font-small-3 text-muted">
                                                {{$event_global_notifys->user->name}} ({{$event_global_notifys->user->email}})
                                            </p>
                                            <small>
                                                    <time class="media-meta text-muted">
                                                        {{ Carbon\Carbon::parse($event_global_notifys->created_at)->diffForHumans()}}
                                                </time>
                                            </small>
                                            <br>
                                        </div>
                                    </div>
                                    @endforeach
                                </li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="{{route('events.all')}}">Read all Events</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-notification nav-item">
                            <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                                <i class="ficon ft-bell"></i>
                                <span class="badge badge-pill badge-success badge-up badge-glow">{{count($user_request)}}</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span></h6><span class="notification-tag badge badge-success float-right m-0">{{count($user_request)}} New</span>
                                </li>
                                <li class="scrollable-container media-list w-100">
                                    @foreach($user_request as $user_requests)
                                        <div class="media">
                                            <div class="media-body">
                                                <h6 class="media-heading">
                                                    @php
                                                        $user = App\User::find($user_requests->user_id);
                                                    @endphp
                                                    {{$user->name}} ({{$user->email}})</h6>
                                                <p class="notification-text font-small-3 text-muted">
                                                    @php
                                                        $sub_dep = App\SubDepartment::find($user_requests->sub_dep_id);
                                                    @endphp
                                                    Main Category: <strong>{{$sub_dep->department->name}}</strong></p>

                                                <p class="notification-text font-small-3 text-muted">
                                                    @php
                                                        $sub_dep = App\SubDepartment::find($user_requests->sub_dep_id);
                                                    @endphp
                                                    Requested Category: <strong>{{$sub_dep->name}}</strong></p>
                                                <small>
                                                        <time class="media-meta text-muted">
                                                        {{ Carbon\Carbon::parse($user_requests->created_at)->diffForHumans()}}
                                                    </time>
                                                </small>
                                                <br>
                                                <form method="post" action="{{ route('subdepartment.approved', $user_requests->id) }}">
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary btn-sm">
                                                        Approved Request?
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    @endforeach
                                </li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="{{route('notification.show')}}">Read all notifications</a></li>
                            </ul>
                        </li>
                        <!-- <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail"></i></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span></h6><span class="notification-tag badge badge-warning float-right m-0">4 New</span>
                                </li>
                                <li class="scrollable-container media-list w-100">
                                    <a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="{{ asset('admin/images/avatar-s-19.png') }}" alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Margaret Govan</h6>
                                                <p class="notification-text font-small-3 text-muted">I like your portfolio, let's start.</p><small>
                                                <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm avatar-busy rounded-circle"><img src="{{ asset('admin/images/avatar-s-2.png' )}}" alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Bret Lezama</h6>
                                                <p class="notification-text font-small-3 text-muted">I have seen your work, there is</p><small>
                                                <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Tuesday</time></small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="{{ asset('admin/images/avatar-s-3.png' )}}" alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Carie Berra</h6>
                                                <p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p><small>
                                                <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Friday</time></small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="{{ asset('admin/images/avatar-s-6.png' )}}" alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Eric Alsobrook</h6>
                                                <p class="notification-text font-small-3 text-muted">We have project party this saturday.</p><small>
                                                <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">last month</time></small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all messages</a></li>
                            </ul>
                        </li> -->
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="mr-1 user-name text-bold-700">{{ Auth::user()->name }}</span><span class="avatar avatar-online"><img src="{{ asset('admin/images/avatar-s-19.png') }}" alt="avatar"><i></i></span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{route('admin.profile.home')}}"><i class="ft-user"></i> Edit Profile</a>
                                <a class="dropdown-item" href="{{route('admin.password.home')}}"><i class="ft-clipboard"></i> Change Password</a>
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
                <li class="nav-item {{ (request()->is('admin/dashboard')) ? 'active' : '' }}">
                    <a href="{{url('admin/dashboard')}}">
                        <i class="la la-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span>
                    </a>
                </li>

                <li class=" nav-item"><a href="#"><i class="la la-list"></i><span class="menu-title" data-i18n="Department">Department</span></a>
                    <ul class="menu-content">
                        <li class="{{ (request()->is('admin/subdepartment')) ? 'active' : '' }}"><a class="menu-item" href="{{url('admin/subdepartment')}}"><i></i><span data-i18n="Subdepartment">Subdepartment</span></a>
                        </li>
                        <li class="{{ (request()->is('admin/company')) ? 'active' : '' }}"><a class="menu-item" href="{{url('admin/company')}}"><i></i><span data-i18n="Subdepartment">Company Info</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item"><a href="#"><i class="la la-calendar"></i><span class="menu-title" data-i18n="Events">Events</span></a>
                    <ul class="menu-content">
                        <li class="{{ (request()->is('admin/events-all')) ? 'active' : '' }}"><a class="menu-item" href="{{route('events.all')}}"><i></i><span data-i18n="eCommerce">All Events</span></a>
                        </li>
                        @foreach($department_global as $department_globals)
                            <li><a class="menu-item" href="#"><i></i><span data-i18n="eCommerce">{{$department_globals->name}}</span></a>
                                <ul class="menu-content">
                                    @foreach($department_globals->subdepartment as $subdepartments)
                                    @php
                                        $inner_menu_active_events = '';
                                        if(request()->segment(2) == 'events'){
                                            if((request()->segment(4) == $subdepartments->name) || (request()->segment(5) == $subdepartments->name)){
                                                $inner_menu_active_events = 'active';
                                            }
                                        }
                                    @endphp
                                        <li class="{{$inner_menu_active_events}}">
                                            <a href="{{route('events.view', ['depart'=>$department_globals->name,'name'=>$subdepartments->name,'id'=>$subdepartments->id])}}" class="menu-item"><i></i><span data-il8n="">{{$subdepartments->name}}</span></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </li>

                <li class=" nav-item"><a href="#"><i class="la la-newspaper-o"></i><span class="menu-title" data-i18n="News">News</span></a>
                    <ul class="menu-content">
                        <li class="{{ (request()->is('admin/news-all')) ? 'active' : '' }}"><a class="menu-item" href="{{route('news.all')}}"><i></i><span data-i18n="eCommerce">All News</span></a>
                        </li>
                        @foreach($department_global as $department_globals)
                        <li><a class="menu-item" href="#"><i></i><span data-i18n="eCommerce">{{$department_globals->name}}</span></a>
                            <ul class="menu-content">
                                @foreach($department_globals->subdepartment as $subdepartments)
                                @php
                                    $inner_menu_active_news = '';
                                    if(request()->segment(2) == 'news'){
                                        if((request()->segment(4) == $subdepartments->name) || (request()->segment(5) == $subdepartments->name)){
                                            $inner_menu_active_news = 'active';
                                        }
                                    }
                                @endphp
                                    <li class="{{$inner_menu_active_news}}">
                                        <a href="{{route('news.view', ['depart'=>$department_globals->name,'name'=>$subdepartments->name,'id'=>$subdepartments->id])}}" class="menu-item"><i></i><span data-il8n="">{{$subdepartments->name}}</span></a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        @endforeach
                    </ul>
                </li>

                <li class="nav-item {{ (request()->is('admin/notification')) ? 'active' : '' }}">
                    <a href="{{route('notification.show')}}">
                        <i class="la la-bell"></i><span class="menu-title" data-i18n="Dashboard">Notification</span>
                    </a>
                </li>

                <li class="nav-item {{ (request()->is('admin/events')) ? 'active' : '' }}">
                    <a href="{{route('events.admin.home')}}">
                        <i class="la la-calendar-plus-o"></i><span class="menu-title" data-i18n="Dashboard">Add Events</span>
                    </a>
                </li>

                <li class="nav-item {{ (request()->is('admin/news')) ? 'active' : '' }}">
                    <a href="{{route('news.admin.home')}}">
                        <i class="la la-plus-circle"></i><span class="menu-title" data-i18n="Dashboard">Add News</span>
                    </a>
                </li>

                <li class="nav-item {{ (request()->is('admin/basic')) ? 'active' : '' }}">
                    <a href="{{route('basic.index')}}">
                        <i class="la la-gear"></i><span class="menu-title" data-i18n="Dashboard">Basic Setting</span>
                    </a>
                </li>
                <li class="nav-item {{ (request()->is('admin/aboutus')) ? 'active' : '' }}">
                    <a href="{{route('aboutus.index')}}">
                        <i class="la la-info-circle"></i><span class="menu-title" data-i18n="Dashboard">About Us</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('aboutus.index')}}">
                        <i class="la la-money"></i><span class="menu-title" data-i18n="Dashboard">Business</span>
                    </a>
                    <ul class="menu-content">
                        <li class="{{ (request()->is('admin/business/add')) ? 'active' : '' }}">
                            <a class="menu-item" href="{{route('business.index')}}"><i></i><span data-i18n="eCommerce">Add Business Pages</span>
                            </a>
                        </li>
                        <li class="{{ (request()->is('admin/business/all')) ? 'active' : '' }}">
                            <a class="menu-item" href="{{route('business.all')}}"><i></i><span data-i18n="eCommerce">View Business Pages</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('geography.index')}}">
                        <i class="la la-map-marker"></i><span class="menu-title" data-i18n="Dashboard">Geography</span>
                    </a>
                    <ul class="menu-content">
                        <li class="{{ (request()->is('admin/geography/add')) ? 'active' : '' }}">
                            <a class="menu-item" href="{{route('geography.index')}}"><i></i><span data-i18n="eCommerce">Add Geography Pages</span>
                            </a>
                        </li>
                        <li class="{{ (request()->is('admin/geography/all')) ? 'active' : '' }}">
                            <a class="menu-item" href="{{route('geography.all')}}"><i></i><span data-i18n="eCommerce">View Geography Pages</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ (request()->is('admin/gallery')) ? 'active' : '' }}">
                    <a href="{{route('gallery.index')}}">
                        <i class="la la-image"></i><span class="menu-title" data-i18n="Dashboard">Gallery</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('career.index')}}">
                        <i class="la la-street-view"></i><span class="menu-title" data-i18n="Dashboard">Career</span>
                    </a>
                    <ul class="menu-content">
                        <li class="{{ (request()->is('admin/career/add')) ? 'active' : '' }}">
                            <a class="menu-item" href="{{route('career.index')}}"><i></i><span data-i18n="eCommerce">Add Career</span>
                            </a>
                        </li>
                        <li class="{{ (request()->is('admin/career/all')) ? 'active' : '' }}">
                            <a class="menu-item" href="{{route('career.all')}}"><i></i><span data-i18n="eCommerce">View Career</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ (request()->is('admin/tendor')) ? 'active' : '' }}">
                    <a href="{{route('tendor.index')}}">
                        <i class="la la-truck"></i><span class="menu-title" data-i18n="Dashboard">Tendor</span>
                    </a>
                </li>

                <li class="nav-item {{ (request()->is('admin/project')) ? 'active' : '' }}">
                    <a href="{{route('project.index')}}">
                        <i class="la la-folder"></i><span class="menu-title" data-i18n="Dashboard">Our Projects</span>
                    </a>
                </li>

                <li class="nav-item {{ (request()->is('admin/award')) ? 'active' : '' }}">
                    <a href="{{route('awards.index')}}">
                        <i class="la la-trophy"></i><span class="menu-title" data-i18n="Dashboard">Awards & Achievements</span>
                    </a>
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
    <script src="{{ asset('admin/js/admin-js.js') }}"></script>
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
