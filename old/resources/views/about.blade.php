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
                                <h1 class="title">About</h1>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="{{url('/')}}"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a>
                                </span>
                                <span class="ttm-bread-sep"> &nbsp; ⁄ &nbsp;</span>
                                <span><span>About</span></span>
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
        <div class="row">
            <div class="col-lg-12 p-0">
                <div class="ttm-tabs full-width style2 details" data-effect="fadeIn">
                    @if($about->banner_image != null)
                        <img src="{{asset('images')}}/{{$about->banner_image}}" alt="" class="w-100 mb-4">
                    @endif
                    {!! $about->details !!}
                </div>
            </div>
        </div><!-- row end -->
    </div>
</section>
<!-- intro-section end -->

</div><!--site-main end-->

@endsection
