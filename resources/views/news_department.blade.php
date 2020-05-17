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
                        <span><span>News</span></span>
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
        @foreach($get_news as $news)
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
                                    @if($get_news[0]->subdepartment != null)
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
        </div>
    </section>

</div>

@endsection