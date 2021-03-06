@extends('layouts.app')

@section('content')

            <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container slide-overlay" data-alias="classic4export" data-source="gallery">

                <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" data-version="5.4.8">
                    <div class="slotholder"></div>
                    <ul>
                        <li data-index="rs-4" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                            <img src="{{ asset('front/images/slider-mainbg-003.jpg') }}" alt="" title="slider-mainbg-003" width="1920" height="725" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                            <div class="tp-caption" id="slide-4-layer-7" data-x="['left','left','left','left']" data-hoffset="['-275','-355','-507','-483']" data-y="['top','top','top','top']" data-voffset="['168','168','50','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-visibility="['on','on','off','off']" data-type="image" data-responsive_offset="on" data-frames='[{"delay":240,"speed":490,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                <img src="{{ asset('front/images/slider-plan-image01.png') }}" alt="" data-ww="['889px','889px','755px','552px']" data-hh="['557px','557px','473px','346px']" width="889" height="557" data-no-retina>
                            </div>
                            <a href="{{url('/sources/single')}}/{{$source_onslider[0]->id}}" >
                                <div class="tp-caption heading-dark-slide" id="slide-4-layer-2" data-x="['center','center','center','center']" data-hoffset="['160','160','-35','-69']" data-y="['middle','middle','middle','middle']" data-voffset="['-154','-154','-143','-109']" data-fontsize="['90','90','70','55']" data-lineheight="['95','95','80','60']" data-fontweight="['700','700','700','700']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":450,"speed":1500,"frame":"0","from":"x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                    {{$source_onslider[0]->name}}
                                </div>
                            </a>
                            <a href="{{url('/sources/single')}}/{{$source_onslider[0]->id}}" >
                                <div class="tp-caption heading-dark-slide" id="slide-4-layer-5" data-x="['center','center','center','center']" data-hoffset="['259','259','42','-20']" data-y="['middle','middle','middle','middle']" data-voffset="['-72','-72','-75','-59']" data-fontsize="['90','90','70','50']" data-lineheight="['95','95','80','60']" data-fontweight="['700','700','700','700']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":800,"speed":1500,"frame":"0","from":"x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                    {{$source_onslider[0]->subdepartment->name}}
                                </div>
                            </a>
                        </li>
                        <li data-index="rs-12" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                            <img src="{{ asset('front/images/Admin-Final-1-copy.jpg') }}" alt="" title="slider-mainbg-004" width="1920" height="725" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                            <div class="tp-caption haeding-slide" id="slide-12-layer-10" data-x="['left','left','left','center']" data-hoffset="['50','40','30','0']" data-y="['top','top','top','middle']" data-voffset="['260','260','130','-40']" data-fontsize="['90','90','80','50']" data-lineheight="['100','100','90','60']" data-fontweight="['600','600','600','600']" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":100,"speed":3000,"frame":"0","from":"x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                {{$source_onslider[1]->name}}
                            </div>

                            <div class="tp-caption simple-text" id="slide-12-layer-11" data-x="['left','left','left','center']" data-hoffset="['50','40','30','0']" data-y="['top','top','top','middle']" data-voffset="['374','374','232','15']" data-fontsize="['35','35','30','20']" data-lineheight="['45','45','40','30']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1470,"speed":1000,"frame":"0","from":"x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                {{$source_onslider[1]->subdepartment->name}}
                            </div>

                            <a class="tp-caption highlight-skin-button " href="{{url('/sources/single')}}/{{$source_onslider[1]->id}}" target="_self" id="slide-12-layer-6" data-x="['left','left','left','center']" data-hoffset="['50','40','30','0']" data-y="['middle','middle','middle','middle']" data-voffset="['123','123','101','82']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-actions='' data-responsive_offset="on" data-frames='[{"delay":1800,"speed":500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[16,16,16,16]" data-paddingright="[30,30,30,30]" data-paddingbottom="[16,16,16,16]" data-paddingleft="[30,30,30,30]">
                                Learn More Details
                            </a>
                        </li>
                    </ul>
                    <div class="tp-loader off">
                        <div class="dot1"></div>
                        <div class="dot2"></div>
                        <div class="bounce1"></div>
                        <div class="bounce2"></div>
                        <div class="bounce3"></div>
                    </div>
                    <div class="tp-bannertimer"></div>
                </div>
            </div>
        </header>
        <!--header end-->

        <!--site-main start-->
        <div class="site-main">

            <!--company-template-section-->
            <section class="ttm-row company-template-section clearfix">
                <div class="container">
                    <div class="row">
                        <div class="ttm-section-info_box ttm-bgcolor-white clearfix">
                            <div class="row box-shadow row-equal-height ttm-box-seperator">
                            @php
                                $counter = 0;
                            @endphp
                                @foreach($info_box as $info_boxes)
                                <div class="col-lg-4 col-md-4 col-sm-12" data-aos="fade-up" data-aos-duration="{{++$counter}}000">
                                    <div class="featured-box style3 text-center">
                                        <div class="featured-icon icon-shape-square icon-bgcolor-grey">
                                            <img src="{{asset('images')}}/{{$info_boxes->info_image}}" alt="" width="80" height="80">
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>{{$info_boxes->info_heading}}</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>{{$info_boxes->info_paragraph}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--bg-layer-section-->
            <section class="ttm-row bg-layer-section bg-layer break-1199-colum clearfix">
                <div class="container">
                    <div class="row row-equal-height">
                        <div class="col-lg-12">
                            <div class="col-bg-img-four ttm-col-bgimage-yes ttm-bg padding-12">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                <div class="layer-content">
                                    <div class="ttm-tabs" data-effect="fadeIn">
                                        <ul class="tabs clearfix">
                                            <li class="active"><a href="#"><i class="fa fa-user"></i>About</a></li>
                                        </ul>
                                        <div class="content-tab ttm-bgcolor-white">
                                            <div class="content-inner active">
                                            {{$about->about_us}}
                                            </div>
                                            <a class="d-block ttm-btn btn-inline ttm-icon-btn-right ttm-btn-color-skincolor" href="{{url('/about')}}">Read More<i class="ti ti-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--row end-->
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row">
                    <div class="col-lg-12">
                            <div class="col-bg-img-four ttm-col-bgimage-yes ttm-bg padding-12">
                                <div class="source-table">
                                    <h2 class="title"></h2>
                                    <table class="table table-resposnive table-striped">
                                        <thead>
                                            <tr>
                                                <td>Department</td>
                                                <td>Price</td>
                                                <td>Area</td>
                                                <td>Date</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($source_onslider as $sourcelogs)
                                            <tr>
                                                <td>{{$sourcelogs->name}}</td>
                                                <td>RS. {{$sourcelogs->sourcelogdecs[0]->price}}</td>
                                                <td>{{$sourcelogs->sourcelogdecs[0]->area}}</td>
                                                <td>{{$sourcelogs->sourcelogdecs[0]->date}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--ttm-row -->
            <section class="ttm-row ttm-bgcolor-grey">
                <div class="container">
                    <div class="row mb-35">
                        <div class="col-lg-9 col-md-12">
                            <div class="section-title clearfix">
                                <h2 class="title">Department<strong>Energy</strong></h2>
                                <div class="heading-seperator"><span></span></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mt-30 mb-35 res-991-mtb-0 float-right" href="{{url('subdepartment')}}">More Sub Departments</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="ttm-row blog-section2 mt_92">
                <div class="container">
                    <div class="row">
                        @php
                            $counter = 0;
                        @endphp
                        @foreach($subdeparment as $subdeparments)
                        <div class="col-md-4 mb-30" data-aos="zoom-in" data-aos-duration="1500">
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
            <!--blog-section end-->

            <section class="ttm-row project-section ttm-bgcolor-darkgrey">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-12">
                            <div class="section-title style2 clearfix">
                                <h2 class="title">Showing<strong>Upcoming Events</strong></h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white mt-30 mb-35 res-991-mt-0 float-right" href="{{url('/events')}}">More Events</a>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($events as $event)
                        <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                            <div class="featured-item ttm-portfolio-view-topimage">
                                @php
                                    $old_date = date($event->start_date);
                                    $old_date_timestamp = strtotime($old_date);
                                    $new_date = date('d M Y H:i:s', $old_date_timestamp);
                                @endphp
                                <div class="timer" data-timer="{{$new_date}}">
                                <span>Started At:</span>
                                    <p>{{$new_date}}</p>
                                </div>
                                <div class="content-post">
                                    <h2 class="title-post">{{$event->name}}</h2>
                                    <span class="category">
                                        <div class="limited-text">
                                        @php
                                            $content = strip_tags($event->details);
                                        @endphp
                                        {!! \Illuminate\Support\Str::limit($content, $limit = 50, $end = '...') !!}
                                        </div>
                                    </span>
                                    <a class="ttm-btn btn-inline ttm-icon-btn-right ttm-btn-color-skincolor" href="{{url('/events/single')}}/{{$event->id}}">Read More<i class="ti ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>


            <section class="ttm-row blog-section2 break-991-colum bg-layer res-991-mt-0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="about-content ttm-col-bgcolor-yes ttm-bg ttm-left-span padding-6 res-991-pl-15">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                <div class="layer-content row">
                                    <div class="col-lg-9 col-md-12">
                                        <div class="section-title clearfix">
                                            <h2 class="title">Check<strong>Out Our News</strong></h2>
                                            <div class="heading-seperator"><span></span></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-12">
                                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mt-30 mb-35 res-991-mtb-0 float-right" href="{{url('/news')}}">More News</a>
                                    </div>
                                    @foreach($news as $new)
                                    <div class="post row m-0 res-991-mb-30 col-md-6" data-aos="zoom-out-up" data-aos-duration="1500">
                                        <div class="post-image col-sm-4">
                                            <img class="img-fluid" src="{{ asset('images') }}/{{$new->image}}" alt="{{$new->headline}}">
                                        </div>
                                        <div class="post-desc style3 col-sm-8">
                                            <div class="post-title">
                                                <h5>{{$new->headline}}</h5>
                                            </div>
                                            <div class="post-meta">
                                                <ul class="list-inline">
                                                    <li><i class="fa fa-list"></i>
                                                    @if($new->subdepartment != null)
                                                        {{$new->subdepartment->name}}
                                                    @else
                                                        @if($new->department != null)
                                                            {{$new->department->name}}
                                                        @endif
                                                    @endif
                                                    </li>
                                                    <li><i class="fa fa-calendar"></i>{{$new->created_at->format('M d, Y')}}</li>
                                                </ul>
                                            </div>
                                            <a class="ttm-btn btn-inline ttm-icon-btn-right ttm-btn-color-skincolor" href="{{url('/news/single')}}/{{$new->id}}">Read More<i class="ti ti-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>

@endsection
