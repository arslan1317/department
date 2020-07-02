@extends('layouts.app')

@section('content')
<!-- page-title -->
<div class="ttm-page-title-row " style="background-color: #008a07;">
    <div class="section-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12"> 
                <div class="title-box">
                    <div class="page-title-heading">
                        <h1 class="title">News</h1>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{url('/')}}"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a>
                        </span>
                        <span class="ttm-bread-sep"> &nbsp; ⁄ &nbsp;</span>
                        <span><span>News</span></span>
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
            @foreach($last_7_days as $news)
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
            @foreach($last_30_days as $news)
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
                </div>
                <hr class="new-hr">
        @endif

        @foreach($all_department as $all_departments)
        @if(count($all_departments->news) != 0)
                <div class="row mb-2">
                    <div class="col-12">
                        <h2 class="title"><strong>{{$all_departments->name}}</strong></h2>
                    </div>
                </div>
                <div class="row">
                @foreach($all_departments->news as $news)
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
                </div>
                <div class="col-12 text-center mb-30">
                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" href="{{url('news/main-department')}}/{{$all_departments->id}}">View All {{$all_departments->name}}  News</a>
                </div>
            @endif
        @endforeach


        @foreach($all_department as $all_departments)
            @foreach($all_departments->subdepartment as $subdepartments)
                @if(count($subdepartments->news) != 0)
                    <div class="row">
                        <div class="col-12">
                            <h2 class="title"><strong>{{$subdepartments->name}}</strong></h2>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($subdepartments->news as $news)
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
                    </div>
                    <div class="col-12 text-center mb-30">
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" href="{{url('news/department')}}/{{$news->subdepartment->id}}">View All {{$news->subdepartment->name}} News</a>
                    </div>
                @endif
            @endforeach
        @endforeach
        <!-- row -->
    </div>
</div>
@endsection