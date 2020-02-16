@extends('layouts.main')

@section('content')
    @include('layouts._breadcrumbs')
    <!--site-main start-->
    <div class="site-main">

        <!-- service-section -->
        <section class="ttm-row services2-section pb-110 clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <!-- section title -->
                        <div class="section-title with-desc title-style-center_text clearfix">
                            <div class="title-header">
                                <h5>OUR SERVICES</h5>
                                <h2 class="title">What You Will Get Form<br>Us Check It</h2>
                            </div>
                            <div class="title-desc">Raising a heavy fur muff that covered the whole of her lower arm towards the viewer regor then turned to look out the window</div>
                        </div><!-- section title end -->
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row mt-10">
{{--                    {{dd($services)}}--}}
                    @foreach($services as $item)

                    <div class="col-md-4">
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox box-shadow2 mb-30">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{$item->getImage()}}" alt="">
                            </div>
                            <div class="ttm-box-bottom-content">
                                <div class="featured-title featured-title">
                                    <h5><a href="home-maintainance.html">{{$item->localization->title}}</a></h5>
                                </div>
                                <div class="featured-desc">
                                    <p>{{$item->localization->short_content}}</p>
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-icon-btn-right ttm-btn-style-border ttm-btn-color-black mt-10" href="home-maintainance.html">MORE DETAILS<i class="ti ti-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                    @endforeach
                </div><!-- row end -->
            </div>
        </section>
        <!-- service-section end -->

    </div><!--site-main end-->

@endsection

