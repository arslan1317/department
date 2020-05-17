@extends('layouts.app')

@section('content')
<div class="ttm-page-title-row news-bg">
    <div class="section-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12"> 
                <div class="title-box">
                    <div class="page-title-heading">
                        @if(count($get_news) != 0)
                        <h1 class="title">
                            @if($get_news[0]->subdepartment != null)
                                {{$get_news[0]->subdepartment->name}}
                            @else
                                {{$get_news[0]->department->name}}
                            @endif
                            </h1>
                        @endif
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{url('/')}}"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a>
                        </span>
                        <span class="ttm-bread-sep"> &nbsp; ⁄ &nbsp;</span>
                        <span>
                        @if(count($get_news) != 0)
                            @if($get_news[0]->subdepartment != null)
                                <a title="Homepage" href="{{url('/news/department/')}}/{{$get_news[0]->subdepartment->id}}">{{$get_news[0]->subdepartment->name}}</a>
                            @else
                            <a title="Homepage" href="{{url('/news/main-department/')}}/{{$get_news[0]->department->id}}">{{$get_news[0]->department->name}}</a>
                            @endif
                        @endif
                        </span>
                        <span class="ttm-bread-sep"> &nbsp; ⁄ &nbsp;</span>
                        <span><span>Events</span></span>
                    </div>  
                </div>
            </div>  
        </div>
    </div>                   
</div>

<div class="site-main all-news-div">

    <!-- intro-section -->
    <section class="ttm-row pt-100 pb-80 ttm-bgcolor-grey break-991-colum clearfix">
        <div class="container">
        <div class="row">
        @foreach($get_news as $events)
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
        </div>
    </section>

</div>

@endsection