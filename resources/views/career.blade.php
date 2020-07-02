@extends('layouts.app')

@section('content')
<style>
    div#accordion button {
        background-color: #008a07;
        color: white;
        border-radius: 0px;
        padding: 10px 20px;
        font-size: 30px;
        text-transform: uppercase;
        font-weight: 600;
    }
    div#accordion .card-header {
        padding: 0px;
        border-radius: 0px;
    }
</style>
<!-- page-title -->
<div class="ttm-page-title-row" style="background-color: #008a07;">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="title-box">
                            <div class="page-title-heading">
                                <h1 class="title">Career</h1>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="{{url('/')}}"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a>
                                </span>
                                <span class="ttm-bread-sep"> &nbsp; ⁄ &nbsp;</span>
                                <span><span>Career</span></span>
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
            <div id="accordion" class="col-12">
                @php
                    $count = 0;
                @endphp
                @foreach($career as $careers)
                @if($count == 0)
                    @php
                        $class = 'show';
                    @endphp
                @else
                    @php
                        $class = '';
                    @endphp
                @endif
                <div class="card">
                    <div class="card-header" id="heading-{{$careers->id}}">
                      <h5 class="mb-0">
                        <button class="btn btn-link btn-block text-left" data-toggle="collapse" data-target="#collapse-{{$careers->id}}" aria-expanded="true" aria-controls="collapseOne">
                          {{$careers->jobtitle}}
                        </button>
                      </h5>
                    </div>
                
                    <div id="collapse-{{$careers->id}}" class="collapse {{$class}}" aria-labelledby="heading-{{$careers->id}}" data-parent="#accordion">
                      <div class="card-body">
                        <h5>Level: {{$careers->level}}</h5>
                        <h5>Duration: {{$careers->duration}}</h5>
                        {!! $careers->details !!}
                      </div>
                    </div>
                  </div>
                    @php
                    $count++;
                    @endphp
                @endforeach
            </div>
            
        </div><!-- row end -->
    </div>
</section>
<!-- intro-section end -->

</div><!--site-main end-->

@endsection