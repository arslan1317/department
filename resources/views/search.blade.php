@extends('layouts.app')

@section('content')

<!-- page-title -->
<div class="ttm-page-title-row " style="background-color: #f1f1f1;border-color: #9d9d9d !important;border-top: 1px solid #d2d3d4;border-bottom: 1px solid #d2d3d4;">
    <div class="section-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-box">
                    <div class="page-title-heading">
                        <h1 class="title">Search Result</h1>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{url('/')}}"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a>
                        </span>
                        <span class="ttm-bread-sep"> &nbsp; ⁄ &nbsp;</span>
                        <span><span>{{$keyword}}</span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- page-title end-->

<div class="site-main all-news-div">

<!-- intro-section -->
    <section class="ttm-row pb-80 ttm-bgcolor-grey break-991-colum clearfix pt-0">
        <div class="container">
            @if(count($new) != 0)
            <div class="row mb-2">
                <div class="col-12">
                    <h2 class="title"><strong>NEWS</strong></h2>
                </div>
            </div>
            <div class="row">
               @foreach($new as $news)
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
                                 @endif
                              </li>
                              <li><i class="fa fa-calendar"></i>{{$news->created_at->format('M d, Y')}}</li>
                           </ul>
                           <div class="limited-text">
                              @php
                              $content = strip_tags($news->body);
                              @endphp
                              {!! \Illuminate\Support\Str::limit($content, $limit = 120, $end = '...') !!}
                           </div>
                           <a class="ttm-btn btn-inline ttm-icon-btn-right ttm-btn-color-skincolor" href="{{url('/news/single')}}/{{$news->id}}">Read More<i class="ti ti-arrow-right"></i></a>
                        </div>
                     </div>
                  </div>
                  <!-- post end -->
               </div>
               @endforeach
            </div>
            <hr class="new-hr">
            @endif
            @if(count($event) != 0)
            <div class="row mb-2">
                <div class="col-12">
                    <h2 class="title"><strong>Events</strong></h2>
                </div>
            </div>
            <div class="row">
                @foreach($event as $events)
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
            @if(count($source) != 0)
            <div class="row mb-2">
                <div class="col-12">
                    <h2 class="title"><strong>Source & Uses</strong></h2>
                </div>
            </div>
            <div class="row">
            @foreach($source as $sources)
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
                                    <canvas id="chart-shown-aa-{{$sources->created_at->format('hms')}}" height="400"></canvas>
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
                                        $('#chart-shown-aa-{{$sources->created_at->format("hms")}}').html('');
                                        var o = $("#chart-shown-aa-{{$sources->created_at->format('hms')}}");
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
                            <a class="ttm-btn btn-inline ttm-icon-btn-right ttm-btn-color-skincolor mt-2" href="{{url('/sources/single')}}/{{$sources->id}}">Read More<i class="ti ti-arrow-right"></i></a>
                        </div><!-- post end -->
                    </div>
                @endforeach
                </div>
                <hr class="new-hr">
        @endif
        </div>
    </section>

@endsection
