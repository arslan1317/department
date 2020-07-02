@extends('layouts.app')

@section('content')
<div class="ttm-page-title-row" style="background-color: #f1f1f1;border-color: #9d9d9d !important;border-top: 1px solid #d2d3d4;border-bottom: 1px solid #d2d3d4;">
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
                                <a title="Homepage" href="">{{$get_news[0]->subdepartment->name}}</a>
                            @else
                            <a title="Homepage" href="">{{$get_news[0]->department->name}}</a>
                            @endif
                        @endif
                        </span>
                        <span class="ttm-bread-sep"> &nbsp; ⁄ &nbsp;</span>
                        <span><span>Sources</span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-main all-news-div">

    <!-- intro-section -->
    <section class="ttm-bgcolor-grey break-991-colum clearfix">
        <div class="container">
        <div class="row">
        @foreach($get_news as $sources)
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
                                    <canvas id="chart-shown-a-{{$sources->created_at->format('hms')}}" height="400"></canvas>
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
                                        $('#chart-shown-a-{{$sources->created_at->format("hms")}}').html('');
                                        var o = $("#chart-shown-a-{{$sources->created_at->format('hms')}}");
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
                                <a class="ttm-btn btn-inline ttm-icon-btn-right ttm-btn-color-skincolor mt-2" href="{{url('/sources/single')}}/{{$sources->id}}">Read More<i class="ti ti-arrow-right"></i></a>
                                @endif
                            </div>
                        </div><!-- post end -->
                    </div>
            @endforeach
            </div>
        </div>
    </section>

</div>

@endsection
