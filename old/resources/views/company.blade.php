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
                                <h1 class="title">{{$company->name}}</h1>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="{{url('/')}}"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a>
                                </span>
                                <span class="ttm-bread-sep"> &nbsp; ⁄ &nbsp;</span>
                                <span><span>{{$company->subdepartment->name}}</span></span>
                                <span class="ttm-bread-sep"> &nbsp; ⁄ &nbsp;</span>
                                <span><span>{{$company->name}}</span></span>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>                     
        </div><!-- page-title end-->

<!--site-main start-->

<!--site-main start-->
<div class="site-main">

<!-- intro-section -->
<section class="ttm-row pt-65 pb-60 ttm-bgcolor-grey clearfix">
    <div class="container">
        <!-- row -->
        <div class="row ttm-sidebar-right">
                    <div class="col-12">
                        <h2 class="title"><strong>{{$company->headline}}</strong></h2>
                    </div>
                <div class="col-lg-12 content-area">
                    <!-- post -->
                    <article class="post ttm-blog-classic">
                        <div class="post-image">
                            @if($company->image != null)
                            <img class="img-fluid" src="{{ asset('images') }}/{{$company->image}}" alt="">
                            @endif
                        </div>
                        <div class="post-desc pt-0 pb-2">
                            <div class="post-meta">
                                <ul class="list-inline">
                                    <li><i class="fa fa-list"></i>
                                    @if($company->subdepartment != null)
                                        {{$company->subdepartment->name}}
                                    @else
                                        {{$company->department->name}}
                                    @endif
                                    </li>
                                    <li><i class="fa fa-calendar"></i>{{$company->created_at->format('M d, Y')}}</li>
                                    @if($company->website != null)
                                    <li><i class="fa fa-globe" aria-hidden="true"></i>{{$company->website}}</li>
                                    @endif                                    
                                    @if($company->telephone != null)
                                    <li><i class="fa fa-phone" aria-hidden="true"></i>{{$company->telephone}}</li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        {!! $company->details !!}
                    </article><!-- post end -->
                </div>
                
            </div><!-- row end -->
    </div>
</section>
<!-- intro-section end -->

</div><!--site-main end-->

@endsection