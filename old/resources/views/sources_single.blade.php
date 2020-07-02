@extends('layouts.app')

@section('content')
<div class="ttm-page-title-row" style="background-color:#008a07">
    <div class="section-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12"> 
                <div class="title-box">
                    <div class="page-title-heading">
                        <h1 class="title">{{$get_news->name}}</h1>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{url('/')}}"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a>
                        </span>
                    </div>  
                </div>
            </div>
        </div> 
    </div>                     
</div>

<div class="site-main">

    <!-- ttm-sidebar -->
    <div class="ttm-sidebar ttm-bgcolor-grey break-991-colum clearfix">
        <div class="container">
            <!-- row -->
            <div class="row ttm-sidebar-right">
                    <div class="col-12">
                        <h2 class="title"><strong>{{$get_news->name}}</strong></h2>
                    </div>
                <div class="col-lg-12 content-area">
                    <!-- post -->
                    <article class="post ttm-blog-classic">                    
                        <div class="post-desc ttm-blog-classic-content style2 mb-20">
                            <div class="post-meta pt-25">
                                <ul class="list-inline">
                                    <li><i class="fa fa-list"></i>
                                    @if($get_news->subdepartment != null)
                                        {{$get_news->subdepartment->name}}
                                    @else
                                        {{$get_news->department->name}}
                                    @endif
                                    </li>
                                    <li><i class="fa fa-calendar"></i>{{$get_news->created_at->format('M d, Y')}}</li>
                                </ul>
                            </div>
                            @if(count($get_news->sourcelog) == 0)
                                    <p class="alert alert-info custom-alert-info">No Source Log Found</p>
                                @else
                                <div class="limited-text">
                                    <canvas id="chart-shown-a-{{$get_news->created_at->format('hms')}}" height="400"></canvas>
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
                                        $('#chart-shown-a-{{$get_news->created_at->format("hms")}}').html('');
                                        var o = $("#chart-shown-a-{{$get_news->created_at->format('hms')}}");
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
                                                    text: "{{$get_news->name}}"
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
                                    printChart({!! $get_news->sourcelog !!});
                                </script>
                                </div>
                                @endif
                        </div>
                    </article><!-- post end -->
                </div>
                
            </div><!-- row end -->
        </div>
    </div>
    <!-- ttm-sidebar end -->
    
</div>

@endsection