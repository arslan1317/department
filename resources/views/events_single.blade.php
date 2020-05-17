@extends('layouts.app')

@section('content')
<div class="ttm-page-title-row" style="background-color:#010d26">
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
                        <div class="post-desc style2 mb-20 pt-0 pb-0 row">
                            <div class="post-meta col-md-6">
                                <ul class="list-inline">
                                    <li><i class="fa fa-clock-o"></i>
                                    @php
                                        $old_date = date($get_news->start_date);
                                        $old_date_end = date($get_news->end_date);
                                        $old_date_timestamp = strtotime($old_date);
                                        $old_date_end_timestamp = strtotime($old_date_end);
                                        $new_date = date('d M Y H:i:s', $old_date_timestamp);   
                                        $new_date_end = date('d M Y H:i:s', $old_date_end_timestamp);   
                                    @endphp
                                    {{$new_date}}
                                    </li>
                                    <li><i class="fa fa-clock-o"></i>
                                    {{$new_date_end}}
                                    </li>
                                </ul>
                            </div>
                            <div class="post-meta col-md-6">
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
                        {!! $get_news->details !!}
                    </article><!-- post end -->
                </div>
                
            </div><!-- row end -->
        </div>
    </div>
    <!-- ttm-sidebar end -->
    
</div>

@endsection