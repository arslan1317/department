@extends('layouts.app')

@section('content')
<!-- page-title -->
<div class="ttm-page-title-row" style="background-color: #f1f1f1;border-color: #9d9d9d !important;border-top: 1px solid #d2d3d4;border-bottom: 1px solid #d2d3d4;">
    <div class="section-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-box">
                    <div class="page-title-heading">
                        <h1 class="title">Events</h1>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{url('/')}}"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a>
                        </span>
                        <span class="ttm-bread-sep"> &nbsp; ⁄ &nbsp;</span>
                        <span><span>Events</span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- page-title end-->


<div class="site-main all-news-div">

<!-- intro-section -->
<section class="ttm-bgcolor-grey break-991-colum clearfix">
    <div class="container">
        @if(count($upcoming_events) != 0)
            <div class="row mb-2">
                <div class="col-12">
                    <h2 class="title"><strong>Upcoming Events</strong></h2>
                </div>
            </div>
            <div class="row">
            @foreach($upcoming_events as $events)
                <div class="col-lg-4">
                    <!-- post -->
                    <div class="post post-topimage">
                        <div class="post-desc style2">
                            <div class="post-title">
                                <h5><a href="#">{{$events->name}}</a> </h5>
                            </div>
                            @php
                                $old_date = date($events->start_date);
                                $old_date_end = date($events->end_date);
                                $old_date_timestamp = strtotime($old_date);
                                $old_date_end_timestamp = strtotime($old_date_end);
                                $new_date = date('d M Y H:i:s', $old_date_timestamp);
                                $new_date_end = date('d M Y H:i:s', $old_date_end_timestamp);
                            @endphp
                            <div class="row" data-timer="{{$new_date}}">
                                <div class="col-md-6 pr-0">
                                    <div class="event-timer event-timer-border">
                                        <span>Started At:</span>
                                        <p>{{$new_date}}</p>
                                    </div>
                                </div>
                                <div class="col-md-6 pl-0">
                                    <div class="event-timer">
                                        <span>Ended At:</span>
                                        <p>{{$new_date_end}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="post-meta">
                                <ul class="list-inline">
                                    <li><i class="fa fa-list"></i>
                                    @if($events->subdepartment != null)
                                        {{$events->subdepartment->name}}
                                    @else

                                    @endif
                                    </li>
                                    <li><i class="fa fa-calendar"></i>{{$events->created_at->format('M d, Y')}}</li>
                                </ul>
                                <div class="limited-text">
                                @php
                                    $content = strip_tags($events->details);
                                @endphp
                                {!! \Illuminate\Support\Str::limit($content, $limit = 120, $end = '...') !!}
                                </div>
                                <a class="ttm-btn btn-inline ttm-icon-btn-right ttm-btn-color-skincolor" href="{{url('/events/single')}}/{{$events->id}}">Read More<i class="ti ti-arrow-right"></i></a>
                            </div>

                        </div>
                    </div><!-- post end -->
                </div>
                @endforeach
                <div class="col-12">
                    <hr class="new-hr">
                </div>
            </div>
        @endif
        @foreach($all_department as $all_departments)
        @if(count($all_departments->events) != 0)
                <div class="row mb-2">
                    <div class="col-12">
                        <h2 class="title"><strong>{{$all_departments->name}}</strong></h2>
                    </div>
                </div>
                <div class="row">
                @foreach($all_departments->events as $events)
                    <div class="col-lg-4">
                        <!-- post -->
                        <div class="post post-topimage">
                            <div class="post-desc style2">
                                <div class="post-title">
                                    <h5><a href="#">{{$events->name}}</a> </h5>
                                </div>
                                @php
                                    $old_date = date($events->start_date);
                                    $old_date_end = date($events->end_date);
                                    $old_date_timestamp = strtotime($old_date);
                                    $old_date_end_timestamp = strtotime($old_date_end);
                                    $new_date = date('d M Y H:i:s', $old_date_timestamp);
                                    $new_date_end = date('d M Y H:i:s', $old_date_end_timestamp);
                                @endphp
                                <div class="row" data-timer="{{$new_date}}">
                                    <div class="col-md-6 pr-0">
                                        <div class="event-timer event-timer-border">
                                            <span>Started At:</span>
                                            <p>{{$new_date}}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pl-0">
                                        <div class="event-timer">
                                            <span>Ended At:</span>
                                            <p>{{$new_date_end}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-meta">
                                    <ul class="list-inline">
                                        <li><i class="fa fa-list"></i>
                                        @if($events->subdepartment != null)
                                            {{$events->subdepartment->name}}
                                        @else
                                            {{$events->department->name}}
                                        @endif
                                        </li>
                                        <li><i class="fa fa-calendar"></i>{{$events->created_at->format('M d, Y')}}</li>
                                    </ul>
                                </div>
                                <div class="limited-text">
                                @php
                                    $content = strip_tags($events->body);
                                @endphp
                                {!! \Illuminate\Support\Str::limit($content, $limit = 120, $end = '...') !!}
                                </div>
                                <a class="ttm-btn btn-inline ttm-icon-btn-right ttm-btn-color-skincolor" href="{{url('/events/single')}}/{{$events->id}}">Read More<i class="ti ti-arrow-right"></i></a>
                            </div>
                        </div><!-- post end -->
                    </div>
                @endforeach
                </div>
                <div class="col-12 text-center mb-30">
                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mt-30 mb-35 res-991-mtb-0" href="{{url('events/main-department')}}/{{$all_departments->id}}">View All {{$all_departments->name}}  Events</a>
                </div>
            @endif
        @endforeach

        @foreach($all_department as $all_departments)
            @foreach($all_departments->subdepartment as $subdepartments)
                @if(count($subdepartments->events) != 0)
                    <div class="row">
                        <div class="col-12">
                            <h2 class="title"><strong>{{$subdepartments->name}}</strong></h2>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($subdepartments->events as $events)
                            <div class="col-lg-4">
                                <!-- post -->
                                <div class="post post-topimage">
                                    <div class="post-desc style2">
                                        <div class="post-title">
                                            <h5><a href="#">{{$events->name}}</a> </h5>
                                        </div>
                                        @php
                                            $old_date = date($events->start_date);
                                            $old_date_end = date($events->end_date);
                                            $old_date_timestamp = strtotime($old_date);
                                            $old_date_end_timestamp = strtotime($old_date_end);
                                            $new_date = date('d M Y H:i:s', $old_date_timestamp);
                                            $new_date_end = date('d M Y H:i:s', $old_date_end_timestamp);
                                        @endphp
                                        <div class="row" data-timer="{{$new_date}}">
                                            <div class="col-md-6 pr-0">
                                                <div class="event-timer event-timer-border">
                                                    <span>Started At:</span>
                                                    <p>{{$new_date}}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-0">
                                                <div class="event-timer">
                                                    <span>Ended At:</span>
                                                    <p>{{$new_date_end}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-meta">
                                            <ul class="list-inline">
                                                <li><i class="fa fa-list"></i>
                                                @if($events->subdepartment != null)
                                                    {{$events->subdepartment->name}}
                                                @else

                                                @endif
                                                </li>
                                                <li><i class="fa fa-calendar"></i>{{$events->created_at->format('M d, Y')}}</li>
                                            </ul>
                                        </div>
                                        <div class="limited-text">
                                        @php
                                            $content = strip_tags($events->body);
                                        @endphp
                                        {!! \Illuminate\Support\Str::limit($content, $limit = 120, $end = '...') !!}
                                        </div>
                                        <a class="ttm-btn btn-inline ttm-icon-btn-right ttm-btn-color-skincolor" href="{{url('/events/single')}}/{{$events->id}}">Read More<i class="ti ti-arrow-right"></i></a>
                                    </div>
                                </div><!-- post end -->
                            </div>
                        @endforeach
                    </div>
                    <div class="col-12 text-center mb-30">
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mt-30 mb-35 res-991-mtb-0" href="{{url('events/department')}}/{{$events->subdepartment->id}}">View All {{$events->subdepartment->name}} Events</a>
                    </div>
                @endif
            @endforeach
        @endforeach

    </div>
</section>
@endsection
