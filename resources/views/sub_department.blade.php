@extends('layouts.app')

@section('content')
<div class="ttm-page-title-row" style="background-color: #008a07;">
    <div class="section-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12"> 
                <div class="title-box">
                    <div class="page-title-heading">
                        <h1 class="title">Energy</h1>
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
<section class="ttm-row blog-section2 mt-100">
    <div class="container">
        <div class="row">
            @foreach($subdeparment as $subdeparments)
            <div class="col-md-4 mb-30">
                <div class="featured-item">
                    <div class="featured-thumbnail">
                        @if(count($subdeparments->news) != 0)
                            @php
                                $maxrand = count($subdeparments->news);
                                $rand = mt_rand(0, $maxrand - 1)
                            @endphp
                            <img class="img-fluid" src="{{ asset('images') }}/{{$subdeparments->news[0]->image}}" alt="{{$subdeparments->name}}">
                        @else
                        <img class="img-fluid" src="https://static.umotive.com/img/product_image_thumbnail_placeholder.png" alt="{{$subdeparments->name}}">
                        @endif
                    </div>
                    <div class="featured-box style5 box-shadow">
                        <div class="featured-icon icon-shape-square icon-size-md">
                            
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h5>{{$subdeparments->name}}</h5>
                            </div>
                            <div class="featured-desc">
                                <p><strong>Address:</strong> {{$subdeparments->address}}</p>
                                <p><strong>Website:</strong> {{$subdeparments->website}}</p>
                                <p><strong>Telephone:</strong> {{$subdeparments->telephone}}</p>
                                <p><strong>Fax:</strong> {{$subdeparments->fax}}</p>
                                <a class="ttm-btn btn-inline ttm-icon-btn-right ttm-btn-color-skincolor" href="{{url('/news/department')}}/{{$subdeparments->id}}">News</a>
                                <a class="ttm-btn btn-inline ttm-icon-btn-right ttm-btn-color-skincolor" href="{{url('events/department')}}/{{$subdeparments->id}}">Events</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection