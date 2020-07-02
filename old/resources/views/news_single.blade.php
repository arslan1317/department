@extends('layouts.app')

@section('content')
<div class="ttm-page-title-row" style="background-color: #008a07;">
    <div class="section-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12"> 
                <div class="title-box">
                    <div class="page-title-heading">
                        <h1 class="title">{{$get_news->headline}}</h1>
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
                        <h2 class="title"><strong>{{$get_news->headline}}</strong></h2>
                    </div>
                <div class="col-lg-12 content-area">
                    <!-- post -->
                    <article class="post ttm-blog-classic">
                        <div class="post-image">
                            <img class="img-fluid" src="{{ asset('images') }}/{{$get_news->image}}" alt="">
                        </div>
                        <div class="post-desc ttm-blog-classic-content style2 mb-20">
                            <div class="post-meta">
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
                        </div>
                        {!! $get_news->body !!}
                    </article><!-- post end -->
                    <article class="post ttm-blog-classic">
                        <h2 class="title text-center mb-30"><strong>Related News</strong></h2>
                        <div class="row">
                        @foreach($realted_news as $news)
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
                    </article>
                </div>
                
            </div><!-- row end -->
        </div>
    </div>
    <!-- ttm-sidebar end -->
    
</div>

@endsection