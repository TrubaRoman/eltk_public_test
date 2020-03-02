@extends('layouts.main')


@section('content')
    @include('layouts._breadcrumbs')
    <!-- sidebar -->
    <div class="site-main">

        <!-- row-text-section -->
        <section class="ttm-row row-text-section ttm-bgcolor-grey">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="sep-box text-center">
                            <h2>We Work Hard And Make Your Home Beautiful</h2>
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
        <section class="ttm-row about3-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 ">
                        <!-- ttm_single_image-wrapper -->
                        <div class="ttm_single_image-wrapper mb-35">
                            <div class="table table-bordered table-hover"> {!! $price->table !!}</div>

                        </div><!-- ttm_single_image-wrapper end -->
                    </div>
                    <div class="col-lg-7 col-sm-12">
                        <div class="pl-20">
                            <!-- section title -->
                            <div class="section-title clearfix">
                                <div class="title-header">
                                    <h5>WELCOME TO BOLDMAN</h5>
                                    <h2 class="title">We Have 25 Years Experience</h2>
                                </div>
                            </div><!-- section title end -->
                            <p><strong>We are a team of professional and skilled experts in all domestic spheres. We offer a wide range of services and at the same time we are always glad to help you with any unconventional household needs:</strong></p>
                            <p class="mb-30">We work to ensure people’s comfort at their home, and to provide the best and the fastest help at fair prices. We stand for quality, safety and credibility, so you could be sure about our work. Initially we started Now we are proud that we can help people with welding, moving, dry cleaning, landscaping and even pest control.</p>
                            <p>Company CEO : Same Williamson</p>

                        </div>
                    </div>
                </div><!-- row end-->
            </div>
        </section>
        <!-- about-section end -->

        <!--services-box-section-->
        <section class="ttm-row services-box-section bg-img12 clearfix">
            <div class="container">
                <div class="row row-equal-height">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box style1 top-icon text-center ttm-bgcolor-white box-shadow2">
                            <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-md ttm-icon_element-style-rounded">
                                <i class="ti ti-flag-alt-2"></i>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Our History</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem  dummy text ever since the 1500s</p>
                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box style1 top-icon text-center ttm-bgcolor-white box-shadow2">
                            <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-md ttm-icon_element-style-rounded">
                                <i class="ti ti-bag"></i>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Our Mission</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem  dummy text ever since the 1500s</p>
                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box style1 top-icon text-center ttm-bgcolor-white box-shadow2">
                            <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-md ttm-icon_element-style-rounded">
                                <i class="ti ti-eye"></i>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Our Vision</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem  dummy text ever since the 1500s.</p>
                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!-- services-box-section end -->


        <!-- fid-section -->
        <!--        <section class="ttm-row fid2-section bg-img13 ttm-bgcolor-skincolor ttm-bg ttm-bgimage-yes clearfix">-->
        <!--            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>-->
        <!--            <div class="container">-->
        <!--                <div class="row ttm-facts-colum-sep">-->
        <!--                    <div class="col-md-3">-->
        <!--                        <div class="ttm-fid inside ttm-fid-view-topicon">-->
        <!--                            <div class="ttm-fid-icon-wrapper"><i class="ti ti-light-bulb"></i></div>-->
        <!--                            <div class="ttm-fid-contents">-->
        <!--                                <h4><span   data-appear-animation = "animateDigits"-->
        <!--                                            data-from             = "0"-->
        <!--                                            data-to               = "215"-->
        <!--                                            data-interval         = "10"-->
        <!--                                            data-before           = ""-->
        <!--                                            data-before-style     = "sup"-->
        <!--                                            data-after            = ""-->
        <!--                                            data-after-style      = "sub"-->
        <!--                                >215-->
        <!--                                    </span>-->
        <!--                                </h4>-->
        <!--                                <h3 class="ttm-fid-title"><span>Completed Projects<br></span></h3>-->
        <!--                            </div>&lt;!&ndash; ttm-fid-contents end &ndash;&gt;-->
        <!--                        </div>-->
        <!--                    </div>-->



    </div>
    <!-- sidebar end -->

@endsection
