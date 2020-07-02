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
                                <h1 class="title">Gallery</h1>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="{{url('/')}}"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a>
                                </span>
                                <span class="ttm-bread-sep"> &nbsp; ⁄ &nbsp;</span>
                                <span><span>Gallery</span></span>
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
                <div class="ttm-tabs full-width style2" data-effect="fadeIn">
                    <ul class="tabs clearfix text-center">
                        @php
                            $count = 0;
                        @endphp
                        @foreach($gellery as $key => $value)
                            @if($count == 0)
                                <li class="tab active"><a href="#">{{$key}}</a></li>
                            @else
                                <li class="tab"><a href="#">{{$key}}</a></li>
                            @endif
                            @php
                                $count++;
                            @endphp
                        @endforeach
                    </ul>
                    <div class="content-tab">
                        @foreach($gellery as $key => $value)
                        <div class="content-inner">
                            <div class="row multi-columns-row ttm-boxes-spacing-5px style2">
                                @foreach($value as $values)
                                <div class="ttm-box-col-wrapper col-lg-3 col-md-4 col-sm-6">
                                    <div class="featured-item featured-portfolio-item">
                                        <div class="featured-thumbnail">
                                            <a href="#">
                                                <img class="img-fluid" src="{{asset('images')}}/{{$values->gallery}}" alt="image">
                                            </a>
                                        </div>
                                        <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                            <div class="featured-iconbox ttm-media-link">
                                                <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="{{$values->caption}}" href="{{asset('images')}}/{{$values->gallery}}" data-rel="prettyPhoto"><i class="ti ti-image"></i></a>
                                            </div>
                                            <div class="content-post content-portfolio-post">
                                                <span class="category">
                                                    @if($values->caption != null)
                                                        <a href="javascript:;">{{$values->caption}}</a>
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div><!-- row end -->
    </div>
</section>
<!-- intro-section end -->

</div><!--site-main end-->

@endsection
