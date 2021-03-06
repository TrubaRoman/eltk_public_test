@extends('layouts.main')
@section('content')
@include('layouts._breadcrumbs')
    <!--site-main start-->
{{--    <div class="site-main">--}}

        <!-- sidebar -->
        <div class="sidebar ttm-sidebar-left ttm-bgcolor-white break-991-colum clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
@include('services._widget_left')
                    <div class="col-lg-9 content-area">
                        <!-- ttm-service-single-content-are -->
                        <div class="ttm-service-single-content-area">

                            <h3>{{$service_item->localization->title}}</h3>
                            <div class="ttm_single_image-wrapper mb-35">
                                <img class="img-fluid" src="{{$service_item->getLastImage()}}" alt="">
                            </div>
                            <div class="mb-35">
                                {!! $service_item->localization->content !!}
                            </div>
                            <div class="sep_holder_box width-100">
                                <span class="sep_holder m-0 mb-35"><span class="sep_line"></span></span>
                                <span class="sep_holder m-0 mb-35"><span class="sep_line"></span></span>
                            </div>

                        </div>
                        <!-- ttm-service-single-content-are end -->
                    </div>
                </div><!-- row end -->
            </div>
        </div>
        <!-- sidebar end -->


{{--    </div><!--site-main end-->--}}
    @endsection