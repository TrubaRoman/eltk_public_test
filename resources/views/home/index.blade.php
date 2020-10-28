@extends('layouts.main')
@section('breadcrumbs','')
@section('content')
    @if($agent->isPhone())
    @include('home._slider_mobile')
    @else
    @include('home._slider')
    @endif

    <div class="site-main ">
        <!--row-top-section-->
        <!-- row-text-section -->
        <section class="ttm-row row-text-section ttm-bgcolor-grey">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sep-box text-center">
                            <h2>Firma, która najlepiej zadba o Twoją instalację elektryczną</h2>
                            <h6>Friendly customer service staff for your all questions!</h6>
                            <div class="sep_holder_box width-30 pt-10">
                                <span class="sep_holder"><span class="sep_line"></span></span>
                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <span class="sep_holder"><span class="sep_line"></span></span>
                            </div>
                            <h4>Toll Free: 1800-200-45678</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- row-text-section end -->
        <!-- about-section -->
        @if(isset($abouts_main))
        <section class="ttm-row about2-section break-1199-colum clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12">
                        <!-- ttm_single_image-wrapper -->
                        <div class="ttm_single_image-wrapper mb-5">
                            <img class="img-fluid" src="build/images/single-img-three.jpg" alt="">
                        </div><!-- ttm_single_image-wrapper end -->
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="pt-20">
                            <div class="row">
{{--                                <div class="col-lg-4 max-content">--}}
{{--                                    <div class="highlight-text">--}}
{{--                                        <h3>2002</h3>--}}
{{--                                        <p>Experience</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="col-lg-8">
                                    <!-- section title -->
                                    <div class="section-title with-desc mt-10 pb-10 clearfix">
                                        <div class="title-header">
                                            <h5>{{__('content/pages.about.sub_title')}}</h5>
                                            <h2 class="title">{{__('content/pages.about.title')}}</h2>
                                        </div>
                                    </div><!-- section title end -->
                                </div>
                            </div>
                            <!-- section title -->
                            @foreach($abouts_main as $main_item)
                            <div class="section-title with-desc clearfix">
                                <div class="title-desc">
                                    <strong>{{$main_item->localization->title}}</strong>
                                </div>
                            </div><!-- section title end -->
                            <p>{!! $main_item->localization->content !!}</p>
                            @endforeach

                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
@endif

        <!-- about-section end -->
@if(isset($abouts_block))
        <!--services-box-section-->
        <section class="ttm-row services-box-section bg-img12 clearfix">
            <div class="container">
                <div class="row row-equal-height">
@foreach($abouts_block as $item)
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box style1 top-icon text-center ttm-bgcolor-white box-shadow2">
                            <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-md ttm-icon_element-style-rounded">
                                <i class="fa {{$item->icons}}"></i>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>{{$item->localization->title}}</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>{!!$item->localization->content!!}</p>
                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                    @endforeach
                </div><!-- row end -->
            </div>
        </section>
   @endif     
        <!-- services-box-section end -->



{{--        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">--}}
{{--        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>--}}
{{--        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>--}}




        <section class="ttm-row row-text-section ttm-bgcolor-grey">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sep-box text-center">
                            <h2>Referencje</h2>
                            <h6>Friendly customer service staff for your all questions!</h6>
{{--                            <div class="sep_holder_box width-30 pt-10">--}}
{{--                                <span class="sep_holder"><span class="sep_line"></span></span>--}}
{{--                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">--}}
{{--                                    <i class="fa fa-phone"></i>--}}
{{--                                </div>--}}
{{--                                <span class="sep_holder"><span class="sep_line"></span></span>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
            <div class="ttm-row pb-110 ttm-bgcolor-grey clearfix ">
                <div class="container ">
                    <div class="row ">

<div class="owl-carousel owl-theme">
                        <div class="item">
                            <!-- featured-imagebox-post -->
                            <div class="featured-imagebox featured-imagebox-post ttm-box-view-left-image row">
                                <div class="col-lg-5 col-md-12 ttm-featured-img-left">
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="images/portfolio/post-one-450x600.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-12 featured-content featured-content-post">
                                <span class="category">
                                    <a href="portfolio-category.html">Electrical</a>

                                </span>
                                    <div class="post-title featured-title">
                                        <h5><a href="single-blog.html">Equipping Researchers in the Developing.</a></h5>
                                    </div>
                                    <div class="featured-desc ttm-box-desc">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alter...</p>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alter...</p>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alter...</p>
                                    </div>
                                    <div class="post-meta">
                                        <span class="ttm-meta-line"><i class="fa fa-calendar"></i><a href="single-blog.html">January 16, 2019</a></span>
                                    </div>
                                </div>
                            </div><!-- featured-imagebox-post end-->
                        </div>
                        <div class="item">
                            <!-- featured-imagebox-post -->
                            <div class="featured-imagebox featured-imagebox-post ttm-box-view-left-image row">
                                <div class="col-lg-5 col-md-12 ttm-featured-img-left">
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="images/portfolio/post-two-450x600.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-12 featured-content featured-content-post">
                                <span class="category">
                                    <a href="portfolio-category.html">Flooring</a>
                                    <a href="portfolio-category.html">Painting</a>
                                </span>
                                    <div class="post-title featured-title">
                                        <h5><a href="single-blog.html">Simple Steps for Replacing old Tiling</a></h5>
                                    </div>
                                    <div class="featured-desc ttm-box-desc">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alter...</p>
                                    </div>
                                    <div class="post-meta">
                                        <span class="ttm-meta-line"><i class="fa fa-calendar"></i><a href="single-blog.html">January 31, 2019</a></span>
                                    </div>
                                </div>
                            </div><!-- featured-imagebox-post end-->
                        </div>
                        <div class="item">
                            <!-- featured-imagebox-post -->
                            <div class="featured-imagebox featured-imagebox-post ttm-box-view-left-image row">
                                <div class="col-lg-5 col-md-12 ttm-featured-img-left">
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="images/portfolio/post-three-450x600.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-12 featured-content featured-content-post">
                                <span class="category">
                                    <a href="portfolio-category.html">Home Maintenance</a>
                                    <a href="portfolio-category.html">Plumber</a>
                                </span>
                                    <div class="post-title featured-title">
                                        <h5><a href="single-blog.html">Danger of Having High Water Pressure</a></h5>
                                    </div>
                                    <div class="featured-desc ttm-box-desc">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alter...</p>
                                    </div>
                                    <div class="post-meta">
                                        <span class="ttm-meta-line"><i class="fa fa-calendar"></i><a href="single-blog.html">January 31, 2019</a></span>
                                    </div>
                                </div>
                            </div><!-- featured-imagebox-post end-->
                        </div>
                        <div class="item">
                            <!-- featured-imagebox-post -->
                            <div class="featured-imagebox featured-imagebox-post ttm-box-view-left-image row">
                                <div class="col-lg-5 col-md-12 ttm-featured-img-left">
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="images/portfolio/post-four-450x600.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-12 featured-content featured-content-post">
                                <span class="category">
                                    <a href="portfolio-category.html">Carpentry</a>
                                    <a href="portfolio-category.html">Home Maintenance</a>
                                </span>
                                    <div class="post-title featured-title">
                                        <h5><a href="single-blog.html">When have a problem with Cracked Pipes</a></h5>
                                    </div>
                                    <div class="featured-desc ttm-box-desc">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alter...</p>
                                    </div>
                                    <div class="post-meta">
                                        <span class="ttm-meta-line"><i class="fa fa-calendar"></i><a href="single-blog.html">January 31, 2019</a></span>
                                    </div>
                                </div>
                            </div><!-- featured-imagebox-post end-->
                        </div>
</div>
                    </div>
                </div>
            </div>



        <!-- service-section -->
        @if(isset($services))
        <section class="ttm-row services2-section pb-110 clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <!-- section title -->
                        <div class="section-title with-desc title-style-center_text clearfix">
                            <div class="title-header">
                                <h5></h5>
                                <h2 class="title">{{__('content/pages.services.title')}}</h2>
                            </div>
                            <div class="title-desc">{{__('content/pages.services.short_text')}}</div>
                        </div><!-- section title end -->
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row mt-10">


                    @foreach($services as $item)

                        <div class="col-md-4 d-flex align-items-streach">
                            <!-- featured-imagebox -->
                            <div class="featured-imagebox box-shadow2 mb-30">
                                <div class="featured-thumbnail" style="min-height: 270px">

                                    <img class="img-fluid" src="{{$item->getThumbnail()}}"  alt="">
                                </div>
                                <div class="ttm-box-bottom-content">
                                    <div class="featured-title featured-title">
                                        <h5><a href="{{route('services.show',[app()->getLocale(),$item->slug])}}">{{$item->localization->title}}</a></h5>
                                    </div>
                                    <div class="featured-desc pb-20" >
                                        <p>{{$item->localization->short_content}}</p>

                                        <div class="self-item ">
                                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-icon-btn-right ttm-btn-style-border ttm-btn-color-black mb-10" href=" {{route('services.show',[app()->getLocale(),$item->slug])}}">{{__('content/pages.buttons.more_details')}}<i class="ti ti-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- featured-imagebox end-->
                        </div>
                    @endforeach
    @endif
                </div><!-- row end -->
            </div>
        </section>
        <!-- service-section end -->

    </div><!--site-main end-->
    <script>

    </script>
    @endsection