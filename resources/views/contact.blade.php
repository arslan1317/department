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
                        <h1 class="title">Contact Us</h1>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="index.html"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a>
                        </span>
                        <span class="ttm-bread-sep"> &nbsp; ⁄ &nbsp;</span>
                        <span><span>Contact Us 1</span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- page-title end-->

<!--site-main start-->

<div class="site-main">

<!--intro-section-->
<section class="ttm-row break-991-colum bg-layer res-991-p-0 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
               <div class="ttm-col-bgcolor-yes ttm-bg ttm-bgcolor-darkgrey padding-8">
                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer color-dark-blue"></div>
                    <div class="layer-content row m-0">
                        <div class="col-md-10">
                            <!-- section title -->
                            <div class="section-title clearfix">
                                <h2 class="title">Send<strong>Us Message!</strong></h2>
                                <div class="heading-seperator"><span></span></div>
                                <p>Please fill out the request for quote form below and our expert team will get back to you shortly.</p>
                            </div><!-- section title end -->
                            <form id="contactform" class="contactform style2 wrap-form clearfix" method="post" action="#" novalidate="novalidate">
                                <label>
                                    <i class="ti ti-user"></i>
                                    <span class="ttm-form-control"><input class="text-input" name="name" type="text" value="" placeholder="Your Name:*" required="required"></span>
                                </label>
                                <label>
                                    <i class="ti ti-email"></i>
                                    <span class="ttm-form-control"><input class="text-input" name="email" type="text" value="" placeholder="Your email-id:*" required="required"></span>
                                </label>
                                <label>
                                    <i class="ti ti-headphone"></i>
                                    <span class="ttm-form-control"><input class="text-input" name="phone" type="text" value="" placeholder="Your Number:*" required="required"></span>
                                </label>
                                <label>
                                    <i class="ti ti-comment"></i>
                                    <span class="ttm-form-control"><textarea class="text-area" name="message" placeholder="Your Message:*" required="required"></textarea></span>
                                </label>
                                <input name="submit" type="submit" value="Submit Now!" class="ttm-btn ttm-btn-size-md  ttm-btn-style-border ttm-btn-color-white" id="submit" title="Submit now"/>
                            </form>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <!-- testimonial-box -->
                <div class="ttm-col-bgcolor-yes ttm-bg ttm-bgcolor-skincolor padding-8 ml_170 res-991-ml-0 mt-100 res-991-mt-0">
                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                    <div class="layer-content">
                        <h2 class="ttm-textcolor-white mb-20">Drop in our office</h2>
                        <!--featured-box-->
                        <div class="featured-box style9 left-icon">
                            <div class="featured-icon icon-white">
                                <i class="ti ti-mobile"></i>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Phone</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>{{$basic_info->phone}}</p>
                                </div>
                            </div>
                        </div><!-- featured-box end-->
                        <!--featured-box-->
                        <div class="featured-box style9 left-icon">
                            <div class="featured-icon icon-white">
                                <i class="ti ti-email"></i>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Email</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>{{$basic_info->email}}</p>
                                </div>
                            </div>
                        </div><!-- featured-box end-->
                        <!--featured-box-->
                        <div class="featured-box style9 left-icon">
                            <div class="featured-icon icon-white">
                                <i class="ti ti-location-pin"></i>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Location</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>{{$basic_info->address}}</p>
                                </div>
                            </div>
                        </div><!-- featured-box end-->
                        <!--featured-box-->
                        <div class="social-icons circle social-hover mt-15 mb-50 res-991-mb-0">
                            <ul class="list-inline contact-icon">
                            @foreach($social_icons as $social_icon)
                                <li><a target="_blank" href="{{$social_icon->link}}">{!!$social_icon->icon!!}</a></li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- row end -->
    </div>
</section>
<!-- intro-section end -->

<div class="map-wrapper">
    <div id="map_canvas"></div>
</div>

</div><!--site-main end-->

@endsection
