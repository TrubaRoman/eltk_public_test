@extends('layouts.main')
@section('content')
    @include('layouts._breadcrumbs')
    <!--site-main start-->
    <div class="site-main">

        <!-- about-section -->
        <section class="ttm-row about3-section ttm-bgcolor-grey">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <!-- single-img -->
                        <div class="single-img mb-40">
                            <img class="img-fluid" src="{{$abouts->getLastImage()}}" alt="{{$abouts->alt_img}}">
                        </div><!-- single-img end -->
                    </div>
                    <div class="col-lg-6 col-sm-12 pl-0 res-991-pl-15">
                        <!-- section title -->
                        <div class="section-title clearfix">
                            <div class="title-header">
                                <h5>WHO WE ARE</h5>
                                <h2 class="title">{{$abouts->localization->title}}</h2>
                            </div>
                        </div><!-- section title end -->
                        <!-- acadion -->
                        <div class="accordion mt-40">
                          {!! $abouts->localization->content !!}
                            @include('layouts._counters')
                        </div><!-- acadion end-->

                    </div>

                </div><!-- row end-->

            </div>
        </section>
        <!-- about-section end -->


        <!--services-section-->
        <section class="ttm-row clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <!-- section-title -->
                        <div class="section-title style2 clearfix">
                            <div class="title-header">
                                <h5>WORKING WITH EXCELLENT</h5>
                                <h2 class="title">{{$abouts->localization->title_two}}</h2>
                            </div>
                            <div class="title-desc">{!!$abouts->localization->content_two!!}</div>
                        </div><!-- section-title end -->
                    </div>

                </div><!-- row end -->
                <!-- row -->

            </div>
        </section>
        <!--services-section end-->

        <!-- testimonial-section -->

        <!-- testimonial-section end-->


        <!-- partners-section -->

        <!-- partners-section end -->

        <!--team-section-->

        <!--team-section end-->

    </div><!--site-main end-->

@endsection