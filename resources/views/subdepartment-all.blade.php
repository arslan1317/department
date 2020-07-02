@extends('layouts.app')

@section('content')
<div class="ttm-page-title-row" style="background-color: #f1f1f1;border-color: #9d9d9d !important;border-top: 1px solid #d2d3d4;border-bottom: 1px solid #d2d3d4;">
    <div class="section-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-box">
                    <div class="page-title-heading">
                        <h1 class="title">{{$subdepartment_name->name}}</h1>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{url('/')}}"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a>
                        </span>
                        <span class="ttm-bread-sep"> &nbsp; ⁄ &nbsp;</span>
                        <span><span>{{$subdepartment_name->department->name}}</span></span>
                        <span class="ttm-bread-sep"> &nbsp; ⁄ &nbsp;</span>
                        <span><span>{{$subdepartment_name->name}}</span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="ttm-row blog-section2 mt-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="title"><strong>Latest News</strong></h2>
            </div>
        </div>
        <div class="row">
        @if(count($sub_news) != 0)
            @foreach($sub_news as $news)
                <div class="col-lg-4">
                    <!-- post -->
                    <div class="post post-topimage">
                        <div class="post-image">
                            <img class="img-fluid" src="{{ asset('images') }}/{{$news->image}}" alt="{{$news->headline}}">
                        </div>
                        <div class="post-desc style2">
                            <div class="post-title">
                                <h5><a href="#">{{$news->headline}}</a> </h5>
                            </div>
                            <div class="post-meta">
                                <ul class="list-inline">
                                    <li><i class="fa fa-list"></i>
                                    @if($news->subdepartment != null)
                                    {{$news->subdepartment->name}}
                                    @else
                                    {{$news->department->name}}
                                    @endif
                                    </li>
                                    <li><i class="fa fa-calendar"></i>{{$news->created_at->format('M d, Y')}}</li>
                                </ul>
                            </div>
                            <div class="limited-text">
                            @php
                                $content = strip_tags($news->body);
                            @endphp
                            {!! \Illuminate\Support\Str::limit($content, $limit = 120, $end = '...') !!}
                            </div>
                            <a class="ttm-btn btn-inline ttm-icon-btn-right ttm-btn-color-skincolor" href="{{url('/news/single')}}/{{$news->id}}">Read More<i class="ti ti-arrow-right"></i></a>
                        </div>
                    </div><!-- post end -->
                </div>
            @endforeach
            <div class="col-12 text-center mb-30">
                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mt-30 mb-35 res-991-mtb-0" href="{{url('news/department')}}/{{$news->sub_dep_id}}">View All News</a>
            </div>
        @else
            <div class="col-12">
                <div class="alert alert-info">NO NEWS FOUND</div>
            </div>
        @endif
        </div>
    </div>
</section>
<section class="ttm-row blog-section2 mt-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="title"><strong>Latest Events</strong></h2>
            </div>
        </div>
        <div class="row">
        @if(count($sub_events) != 0)
            @foreach($sub_events as $events)
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
            <div class="col-12 text-center mb-30">
                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mt-30 mb-35 res-991-mtb-0" href="{{url('events/department')}}/{{$events->sub_dep_id}}">View All Events</a>
            </div>
        @else
            <div class="col-12">
                <div class="alert alert-info">NO EVENTS FOUND</div>
            </div>
        @endif
        </div>
    </div>
</section>
<section class="ttm-row blog-section2 mt-100 mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="title"><strong>Latest Source</strong></h2>
            </div>
        </div>
        <div class="row">
        @if(count($sub_sources) != 0)
            @foreach($sub_sources as $sources)
                <div class="col-lg-6">
                        <!-- post -->
                        <div class="post post-topimage">
                            <div class="post-desc style2">
                                <div class="post-title">
                                    <h5><a href="#">{{$sources->name}}</a> </h5>
                                </div>
                                <div class="post-meta">
                                    <ul class="list-inline">
                                        <li><i class="fa fa-calendar"></i>{{$sources->created_at->format('M d, Y')}}</li>
                                    </ul>
                                </div>
                                @if(count($sources->sourcelog) == 0)
                                    <p class="alert alert-info custom-alert-info">No Source Log Found</p>
                                @else
                                <div class="limited-text">
                                    <canvas id="chart-shown-b-{{$sources->created_at->format('hms')}}" height="400"></canvas>
                                    <script>
                                    function printChart(datasource){
                                        var area = []
                                        var date = [];
                                        var price = [];
                                        for(var i = 0; i < datasource.length; i++){
                                            area[i] = datasource[i]['area'];
                                            date[i] = datasource[i]['date'];
                                            price[i] = datasource[i]['price'];
                                        }
                                        $('#chart-shown-b-{{$sources->created_at->format("hms")}}').html('');
                                        var o = $("#chart-shown-b-{{$sources->created_at->format('hms')}}");
                                        new Chart(o, {
                                            type: "line",
                                            options: {
                                                responsive: !0,
                                                maintainAspectRatio: !1,
                                                legend: {
                                                    position: "bottom"
                                                },
                                                hover: {
                                                    mode: "label"
                                                },
                                                scales: {
                                                    xAxes: [{
                                                        display: !0,
                                                        gridLines: {
                                                            color: "#f3f3f3",
                                                            drawTicks: !1
                                                        },
                                                        scaleLabel: {
                                                            display: !0,
                                                            labelString: "Date"
                                                        },
                                                        ticks: {
                                                            padding: 20
                                                        }
                                                    }],
                                                    yAxes: [{
                                                        display: !0,
                                                        gridLines: {
                                                            color: "#f3f3f3",
                                                            drawTicks: !1
                                                        },
                                                        scaleLabel: {
                                                            display: !0,
                                                            labelString: "Price"
                                                        }
                                                    }]
                                                },
                                                title: {
                                                    display: !0,
                                                    text: "{{$sources->name}}"
                                                }
                                            },
                                            data: {
                                                labels: date,
                                                datasets: [{
                                                    label: area,
                                                    data: price,
                                                    fill: !1,
                                                    borderDash: [5, 5],
                                                    borderColor: "#9C27B0",
                                                    pointBorderColor: "#9C27B0",
                                                    pointBackgroundColor: "#FFF",
                                                    pointBorderWidth: 2,
                                                    pointHoverBorderWidth: 2,
                                                    pointRadius: 4
                                                }]
                                            }
                                        })
                                    }
                                    printChart({!! $sources->sourcelog !!});
                                </script>
                                </div>
                                @endif
                            </div>
                        </div><!-- post end -->
                    </div>
                @endforeach
            <div class="col-12 text-center mb-30">
                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mt-30 mb-35 res-991-mtb-0" href="{{url('sources/department')}}/{{$sources->sub_dep_id}}">View All Sources</a>
            </div>
        @else
            <div class="col-12">
                <div class="alert alert-info">NO SOURCES FOUND</div>
            </div>
        @endif
        </div>
    </div>
</section>
@endsection
