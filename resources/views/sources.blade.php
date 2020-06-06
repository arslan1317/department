@extends('layouts.app')

@section('content')
<!-- page-title -->
<div class="ttm-page-title-row" style="background-color: #008a07;">
    <div class="section-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12"> 
                <div class="title-box">
                    <div class="page-title-heading">
                        <h1 class="title">Sources</h1>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{url('/')}}"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a>
                        </span>
                        <span class="ttm-bread-sep"> &nbsp; ⁄ &nbsp;</span>
                        <span><span>Sources</span></span>
                    </div>  
                </div>
            </div>  
        </div>
    </div>                   
</div><!-- page-title end-->
<div class="site-main all-news-div">

<!-- intro-section -->
<section class="ttm-row pt-100 pb-80 ttm-bgcolor-grey break-991-colum clearfix">
    <div class="container">
        @if(count($last_7_days) != 0)
            <div class="row mb-2">
                <div class="col-12">
                    <h2 class="title"><strong>Within the past 7 days</strong></h2>
                </div>
            </div>
            <div class="row">
            @foreach($last_7_days as $sources)
                <div class="col-lg-6">
                        <!-- post -->
                        <div class="post post-topimage">
                            <div class="post-desc style2">
                                <div class="post-title">
                                    <h5><a href="#">{{$sources->name}}</a> </h5>
                                </div>
                                <div class="post-meta">
                                    <ul class="list-inline">
                                        <li><i class="fa fa-calendar"></i>{{$news->created_at->format('M d, Y')}}</li>
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
                        </div><!-- post end -->
                    </div>
                @endforeach
                </div>
                <hr class="new-hr">
        @endif

        @if(count($last_30_days) != 0)
            <div class="row mb-2">
                <div class="col-12">
                    <h2 class="title"><strong>Within the past 30 days</strong></h2>
                </div>
            </div>
            <div class="row">
            @foreach($last_30_days as $sources)
            <div class="col-lg-6">
                        <!-- post -->
                        <div class="post post-topimage">
                            <div class="post-desc style2">
                                <div class="post-title">
                                    <h5><a href="#">{{$sources->name}}</a> </h5>
                                </div>
                                <div class="post-meta">
                                    <ul class="list-inline">
                                        <li><i class="fa fa-calendar"></i>{{$news->created_at->format('M d, Y')}}</li>
                                    </ul>
                                </div>
                                @if(count($sources->sourcelog) == 0)
                                    <p class="alert alert-info custom-alert-info">No Source Log Found</p>
                                @else
                                <div class="limited-text">
                                    <canvas id="chart-shown-bb-{{$sources->created_at->format('hms')}}" height="400"></canvas>
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
                                        $('#chart-shown-bb-{{$sources->created_at->format("hms")}}').html('');
                                        var o = $("#chart-shown-bb-{{$sources->created_at->format('hms')}}");
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
                </div>
                <hr class="new-hr">
        @endif


        @foreach($all_department as $all_departments)
            @foreach($all_departments->subdepartment as $subdepartments)
                @if(count($subdepartments->sources) != 0)
                    <div class="row">
                        <div class="col-12">
                            <h2 class="title"><strong>{{$subdepartments->name}}</strong></h2>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($subdepartments->sources as $sources)
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
                    </div>
                    <div class="col-12 text-center mb-30">
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" href="{{url('sources/department')}}/{{$sources->subdepartment->id}}">View All {{$sources->subdepartment->name}} Sources</a>
                    </div>
                @endif
            @endforeach
        @endforeach
        <!-- row -->
    </div>
</div>
@endsection