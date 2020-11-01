@extends('layouts.main')
@section('content')
@section('breadcrumbs',\DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render('reference.show',$reference_item))
<!--site-main start-->
{{--    <div class="site-main">--}}

<!-- sidebar -->
<div class="sidebar ttm-sidebar-left ttm-bgcolor-white break-991-colum clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">

            <div class="col-lg-12 order-lg-2  content-area">
                <!-- ttm-service-single-content-are -->
                <div class="ttm-service-single-content-area">
                    <div class="row">
                        <div class="post-title featured-title  col-lg-6  pt-4  ">
                            <img src="{{$reference_item->getLogo()}}"  alt="logo" >
                        </div>

                    </div>

                    <div class="ttm_single_image-wrapper mb-35">
                        <img class="img-fluid" src="{{$reference_item->getLastImage()}}" alt="{{$reference_item->alt_image}}">
                    </div>
                    <div class="mb-35">

                    </div>
                    <div class="sep_holder_box width-100">
                        <span class="sep_holder m-0 mb-35"><span class="sep_line"></span></span>
                        <span class="sep_holder m-0 mb-35"><span class="sep_line"></span></span>
                    </div>

                </div>
                <!-- ttm-service-single-content-are end -->
            </div>

        </div><!-- row end -->

        <section class="ttm-row row-text-section ttm-bgcolor-grey">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sep-box text-center">
                            <h2>Czekamy na ofertę</h2>
                            <h6>Friendly customer service staff for your all questions!</h6>
                            <div class="sep_holder_box width-30 pt-10">
                                <span class="sep_holder"><span class="sep_line"></span></span>
                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <span class="sep_holder"><span class="sep_line"></span></span>
                            </div>
                            <h4>Toll Free: 1800-200-45678</h4>
                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-icon-btn-right ttm-btn-style-border ttm-btn-color-black mt-15 mb-30 " href="{{route('contacts',app()->getLocale())}}">{{__('content/pages.contacts.title')}}<i class="ti ti-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>
<!-- sidebar end -->


{{--    </div><!--site-main end-->--}}
@endsection