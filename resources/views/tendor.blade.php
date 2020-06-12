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
                                <h1 class="title">Tendor</h1>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="{{url('/')}}"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a>
                                </span>
                                <span class="ttm-bread-sep"> &nbsp; ⁄ &nbsp;</span>
                                <span><span>Tendor</span></span>
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
            @foreach($career as $careers)
                <div class="col-lg-12 p-0 pt-4">
                    <div class="ttm-tabs full-width style2" data-effect="fadeIn">
                        <h1>{{$careers->jobtitle}}</h1>
                        <h5>Level: {{$careers->level}}</h5>
                        <h5>Duration: {{$careers->duration}}</h5>
                        {!! $careers->details !!}
                    </div>
                </div>
            @endforeach
        </div><!-- row end -->
    </div>
</section>
<!-- intro-section end -->

</div><!--site-main end-->

@endsection