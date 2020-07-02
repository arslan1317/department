@extends('layouts.app')

@section('content')

<!-- page-title -->
<div class="ttm-page-title-row" style="background-color: #f1f1f1;border-color: #9d9d9d !important;border-top: 1px solid #d2d3d4;border-bottom: 1px solid #d2d3d4;">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-box">
                            <div class="page-title-heading">
                                <h1 class="title">Geography</h1>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="{{url('/')}}"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a>
                                </span>
                                <span class="ttm-bread-sep"> &nbsp; ⁄ &nbsp;</span>
                                <span><span>Geography - {{$geography->heading}}</span></span>
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
<section class="ttm-bgcolor-grey clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12 p-0">
                <div class="ttm-tabs full-width style2 details" data-effect="fadeIn">
                    @if($geography->banner_image != null)
                        <img src="{{asset('images')}}/{{$geography->banner_image}}" alt="" class="w-100 mb-4">
                    @endif
                    {!! $geography->details !!}
                </div>
            </div>
        </div><!-- row end -->
    </div>
</section>
<!-- intro-section end -->

</div><!--site-main end-->

@endsection
