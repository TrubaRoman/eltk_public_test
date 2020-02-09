@extends('layouts.main')

@section('content')
    @include('home._slider')
{{--    <div class="site-main">--}}
{{--        <!--row-top-section-->--}}
{{--        <section class="ttm-row row-top-section clearfix">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-12">--}}
{{--                        <div class="mt_40 mlr-30 res-767-mt-0">--}}
{{--                            <div class="row row-equal-height ttm-bgcolor-white box-shadow2">--}}
{{--                                <div class="col-lg-4 col-md-4 col-sm-12">--}}
{{--                                    <!-- featured-icon-box -->--}}
{{--                                    <div class="featured-icon-box style1 top-icon text-center">--}}
{{--                                        <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-md ttm-icon_element-style-square">--}}
{{--                                            <i class="ti ti-settings"></i>--}}
{{--                                        </div>--}}
{{--                                        <div class="featured-content">--}}
{{--                                            <div class="featured-title">--}}
{{--                                                <h5>Large Number <br>of Services Provided</h5>--}}
{{--                                            </div>--}}
{{--                                            <div class="featured-desc">--}}
{{--                                                <p>We are a company providing a wide range of maintenance and many other services.</p>--}}
{{--                                                <a class="ttm-btn ttm-btn-size-sm ttm-icon-btn-right ttm-btn-color-skincolor btn-inline mb-10" href="#">MORE SERVICES<i class="ti ti-angle-double-right"></i></a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div><!-- featured-icon-box end-->--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-4 col-md-4 col-sm-12 box-shadow2">--}}
{{--                                    <!-- featured-icon-box -->--}}
{{--                                    <div class="featured-icon-box style1 top-icon text-center">--}}
{{--                                        <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-md ttm-icon_element-style-square">--}}
{{--                                            <i class="ti ti-user"></i>--}}
{{--                                        </div>--}}
{{--                                        <div class="featured-content">--}}
{{--                                            <div class="featured-title">--}}
{{--                                                <h5>10+ Years of <br>Professional Experience</h5>--}}
{{--                                            </div>--}}
{{--                                            <div class="featured-desc">--}}
{{--                                                <p>We work to ensure people’s comfort at their home to provide the best and the fastest.</p>--}}
{{--                                                <a class="ttm-btn ttm-btn-size-sm ttm-icon-btn-right ttm-btn-color-skincolor btn-inline mb-10" href="#">MORE ABOUT<i class="ti ti-angle-double-right"></i></a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div><!-- featured-icon-box end-->--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-4 col-md-4 col-sm-12">--}}
{{--                                    <!-- featured-icon-box -->--}}
{{--                                    <div class="featured-icon-box style1 top-icon text-center">--}}
{{--                                        <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-md ttm-icon_element-style-square">--}}
{{--                                            <i class="ti ti-thumb-up"></i>--}}
{{--                                        </div>--}}
{{--                                        <div class="featured-content">--}}
{{--                                            <div class="featured-title">--}}
{{--                                                <h5>A Large Number <br>of Grateful Customers</h5>--}}
{{--                                            </div>--}}
{{--                                            <div class="featured-desc">--}}
{{--                                                <p>We have been working for years to improve our skills, to expand the spheres of our work.</p>--}}
{{--                                                <a class="ttm-btn ttm-btn-size-sm ttm-icon-btn-right ttm-btn-color-skincolor btn-inline mb-10" href="#">READ MORE<i class="ti ti-angle-double-right"></i></a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div><!-- featured-icon-box end-->--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div><!-- row end -->--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <!-- row-top-section end -->--}}


{{--        <!--about-section-->--}}
{{--        <section class="ttm-row about-section bg-img1 break-991-colum clearfix">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-5 col-sm-12">--}}
{{--                        <!-- ttm_single_image-wrapper -->--}}
{{--                        <div class="ttm_single_image-wrapper mb-5">--}}
{{--                            <img class="img-fluid" src="images/single-img-one.png" alt="">--}}
{{--                        </div><!-- ttm_single_image-wrapper end -->--}}
{{--                    </div>--}}
{{--                    <div class="col-md-7 col-sm-12">--}}
{{--                        <div class="pr-10 res-991-plr-0">--}}
{{--                            <!-- section title -->--}}
{{--                            <div class="section-title clearfix">--}}
{{--                                <div class="title-header">--}}
{{--                                    <h5>ABOUT BOLDMAN</h5>--}}
{{--                                    <h2 class="title">We Build for Your Comfort</h2>--}}
{{--                                </div>--}}
{{--                            </div><!-- section title end -->--}}
{{--                            <p><strong>We are a team of professional and skilled experts in all domestic spheres. We offer a wide range of services and at the same time we are always glad to help you with any unconventional household needs:</strong></p>--}}
{{--                            <p class="pt-5">We work to ensure people’s comfort at their home, and to provide the best and the fastest help at fair prices. We stand for quality, safety and credibility, so you could be sure about our work. Initially we started as a company specializing in household maintenance. During our successful work we expanded our list of services. Now we are proud that we can help people with welding, moving, dry cleaning, landscaping and even pest control. Every member of our team is indeed good at his job and the company guarantees the quality of work.--}}
{{--                            </p>--}}
{{--                            <a class="ttm-btn ttm-btn-size-sm ttm-icon-btn-right ttm-btn-color-skincolor btn-inline mb-20" href="#">MORE ABOUT<i class="ti ti-angle-double-right"></i></a>--}}
{{--                            <div class="separator">--}}
{{--                                <div class="sep-line mt_5 mb-40"></div>--}}
{{--                            </div>--}}
{{--                            <!-- row-->--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-4 col-sm-12">--}}
{{--                                    <!--featured-icon-box-->--}}
{{--                                    <div class="featured-icon-box style2 left-icon">--}}
{{--                                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">--}}
{{--                                            <i class="ti ti-timer"></i>--}}
{{--                                        </div>--}}
{{--                                        <div class="featured-content">--}}
{{--                                            <div class="featured-title">--}}
{{--                                                <h5>Ontime at Services</h5>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div><!-- featured-icon-box end-->--}}
{{--                                </div>--}}
{{--                                <div class="col-md-4 col-sm-12">--}}
{{--                                    <!--featured-icon-box-->--}}
{{--                                    <div class="featured-icon-box style2 left-icon">--}}
{{--                                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">--}}
{{--                                            <i class="ti ti-wand"></i>--}}
{{--                                        </div>--}}
{{--                                        <div class="featured-content">--}}
{{--                                            <div class="featured-title">--}}
{{--                                                <h5>24/7 Services</h5>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div><!-- featured-icon-box end-->--}}
{{--                                </div>--}}
{{--                                <div class="col-md-4 col-sm-12">--}}
{{--                                    <!--featured-icon-box-->--}}
{{--                                    <div class="featured-icon-box style2 left-icon">--}}
{{--                                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">--}}
{{--                                            <i class="ti ti-medall"></i>--}}
{{--                                        </div>--}}
{{--                                        <div class="featured-content">--}}
{{--                                            <div class="featured-title">--}}
{{--                                                <h5>Verified Professionals</h5>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div><!-- featured-icon-box end-->--}}
{{--                                </div>--}}
{{--                            </div><!-- row end-->--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div><!-- row end -->--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <!--about-section end-->--}}


{{--        <!--broken-section-->--}}
{{--        <section class="ttm-row broken-section bg-layer break-1199-colum res-991-mt-0 mt_70 clearfix">--}}
{{--            <div class="container">--}}
{{--                <!-- row -->--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <!-- about-content -->--}}
{{--                        <div class="about-content ttm-col-bgcolor-yes ttm-bg ttm-left-span ttm-bgcolor-skincolor spacing-1">--}}
{{--                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>--}}
{{--                            <div class="layer-content">--}}
{{--                                <!-- section title -->--}}
{{--                                <div class="section-title with-desc clearfix">--}}
{{--                                    <div class="title-header">--}}
{{--                                        <h5>WORKING WITH EXCELLENT</h5>--}}
{{--                                        <h2 class="title">Our Special Services</h2>--}}
{{--                                    </div>--}}
{{--                                    <div class="title-desc">Boldman has 10+ years of experience with providing wide area of specialty services works listed below.</div>--}}
{{--                                </div><!-- section title end -->--}}
{{--                                <!--featured-icon-box-->--}}
{{--                                <div class="featured-icon-box style3 left-icon icon-align-top">--}}
{{--                                    <div class="featured-icon">--}}
{{--                                        <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-md ttm-icon_element-style-square">--}}
{{--                                            <i class="ti ti-home"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="featured-content">--}}
{{--                                        <div class="featured-title">--}}
{{--                                            <h5>Home Maintenance</h5>--}}
{{--                                        </div>--}}
{{--                                        <div class="featured-desc">--}}
{{--                                            <p>We have experience in home maintenance any surface from new constructions to cabinets in commercial properties. If you are doing your</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div><!-- featured-icon-box end-->--}}
{{--                                <div class="separator">--}}
{{--                                    <div class="sep-line mt_5 mb-20"></div>--}}
{{--                                </div>--}}
{{--                                <!--featured-icon-box-->--}}
{{--                                <div class="featured-icon-box style3 left-icon icon-align-top">--}}
{{--                                    <div class="featured-icon">--}}
{{--                                        <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-md ttm-icon_element-style-square">--}}
{{--                                            <i class="ti ti-light-bulb"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="featured-content">--}}
{{--                                        <div class="featured-title">--}}
{{--                                            <h5>Electrical Services</h5>--}}
{{--                                        </div>--}}
{{--                                        <div class="featured-desc">--}}
{{--                                            <p>Electricity is very important part of our life. We can’t imagine it without home appliances that in turns work with services provider</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div><!-- featured-icon-box end-->--}}
{{--                            </div>--}}
{{--                        </div><!-- about-content end-->--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <!-- col-img-img-one -->--}}
{{--                        <div class="col-bg-img-one ttm-col-bgimage-yes ttm-bg ttm-right-span">--}}
{{--                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>--}}
{{--                            <div class="layer-content"></div>--}}
{{--                        </div><!-- col-img-bg-img-one end-->--}}
{{--                        <img src="images/bg-image/col-bgimage-1.jpg" class="ttm-equal-height-image" alt="bg-image">--}}
{{--                    </div>--}}
{{--                </div><!-- row end -->--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <!--broken-section end-->--}}


{{--        <!--broken-section-->--}}
{{--        <div class="ttm-row broken-section break-991-colum ttm-bgcolor-darkgrey clearfix">--}}
{{--            <div class="container">--}}
{{--                <!-- row -->--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-5">--}}
{{--                        <!-- ttm_single_image-wrapper -->--}}
{{--                        <div class="ttm_single_image-wrapper mb_60 res-991-mb-0 res-991-mt-50">--}}
{{--                            <img class="img-fluid" src="images/single-img-twel.jpg" alt="">--}}
{{--                        </div><!-- ttm_single_image-wrapper end -->--}}
{{--                    </div>--}}
{{--                    <div class="col-md-7">--}}
{{--                        <div class="spacing-2">--}}
{{--                            <!-- wrap-testimonial -->--}}
{{--                            <div class="testimonial-slide owl-carousel" data-item="1" data-nav="false" data-dots="false" data-auto="false">--}}
{{--                                <!-- testimonials -->--}}
{{--                                <div class="testimonials">--}}
{{--                                    <div class="testimonial-content">--}}
{{--                                        <div class="testimonial-avatar">--}}
{{--                                            <div class="testimonial-img">--}}
{{--                                                <img class="img-center" src="images/testimonial/01.jpg" alt="testimonial-img">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="testimonial-caption">--}}
{{--                                            <h6>Linda Jone</h6>--}}
{{--                                            <label>Newyork City</label>--}}
{{--                                        </div>--}}
{{--                                        <blockquote>Amazing service! Attention to detail, very helpful in terms of providing us with our preferred TV mounting and wiring needs. Excellent work and very pleasant! Highly recommend. Will hire again any time. Many thanks!</blockquote>--}}
{{--                                    </div>--}}
{{--                                </div><!-- testimonials end -->--}}
{{--                                <!-- testimonials -->--}}
{{--                                <div class="testimonials">--}}
{{--                                    <div class="testimonial-content">--}}
{{--                                        <div class="testimonial-avatar">--}}
{{--                                            <div class="testimonial-img">--}}
{{--                                                <img class="img-center" src="images/testimonial/02.jpg" alt="testimonial-img">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="testimonial-caption">--}}
{{--                                            <h6>Tonny Edward</h6>--}}
{{--                                            <label>Newyork City</label>--}}
{{--                                        </div>--}}
{{--                                        <blockquote>I called Boldman for some work. He arrived early, was very professional, went above and beyond to make sure that I was a happy client. I would definitely hire him again. He did a great job and I would recommend him anytime.</blockquote>--}}
{{--                                    </div>--}}
{{--                                </div><!-- testimonials end -->--}}
{{--                                <!-- testimonials -->--}}
{{--                                <div class="testimonials">--}}
{{--                                    <div class="testimonial-content">--}}
{{--                                        <div class="testimonial-avatar">--}}
{{--                                            <div class="testimonial-img">--}}
{{--                                                <img class="img-center" src="images/testimonial/03.jpg" alt="testimonial-img">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="testimonial-caption">--}}
{{--                                            <h6>Teena Venanda</h6>--}}
{{--                                            <label>Newyork City</label>--}}
{{--                                        </div>--}}
{{--                                        <blockquote>Boldman was awesome. Arrived early, super friendly, understood everything I needed. He finished his work on time, cleaned up the area and was professional. He did a great job and I would recommend him anytime.</blockquote>--}}
{{--                                    </div>--}}
{{--                                </div><!-- testimonials end -->--}}
{{--                            </div><!-- wrap-testimonial end-->--}}
{{--                            <!-- row-->--}}
{{--                            <div class="row ttm-fid-row-wrapper">--}}
{{--                                <div class="col-md-4 col-sm-4">--}}
{{--                                    <div class="ttm-fid inside ttm-fid-view-lefticon">--}}
{{--                                        <div class="ttm-fid-left">--}}
{{--                                            <div class="ttm-fid-icon-wrapper">--}}
{{--                                                <i class="ti ti-briefcase"></i>--}}
{{--                                            </div>--}}
{{--                                            <h4 class="ttm-fid-inner">--}}
{{--                                                <span   data-appear-animation = "animateDigits"--}}
{{--                                                        data-from             = "0"--}}
{{--                                                        data-to               = "350"--}}
{{--                                                        data-interval         = "5"--}}
{{--                                                        data-before           = ""--}}
{{--                                                        data-before-style     = "sup"--}}
{{--                                                        data-after            = ""--}}
{{--                                                        data-after-style      = "sub"--}}
{{--                                                >350</span><span>+</span>--}}
{{--                                            </h4>--}}
{{--                                        </div>--}}
{{--                                        <div class="ttm-fid-contents">--}}
{{--                                            <h3 class="ttm-fid-title">Projects Completed</h3>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-4 col-sm-4">--}}
{{--                                    <div class="ttm-fid inside ttm-fid-view-lefticon">--}}
{{--                                        <div class="ttm-fid-left">--}}
{{--                                            <div class="ttm-fid-icon-wrapper">--}}
{{--                                                <i class="ti ti-user"></i>--}}
{{--                                            </div>--}}
{{--                                            <h4 class="ttm-fid-inner">--}}
{{--                                                <span   data-appear-animation = "animateDigits"--}}
{{--                                                        data-from             = "0"--}}
{{--                                                        data-to               = "120"--}}
{{--                                                        data-interval         = "5"--}}
{{--                                                        data-before           = ""--}}
{{--                                                        data-before-style     = "sup"--}}
{{--                                                        data-after            = ""--}}
{{--                                                        data-after-style      = "sub"--}}
{{--                                                >120</span><span>+</span>--}}
{{--                                            </h4>--}}
{{--                                        </div>--}}
{{--                                        <div class="ttm-fid-contents">--}}
{{--                                            <h3 class="ttm-fid-title">Work Employed</h3>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-4 col-sm-4">--}}
{{--                                    <div class="ttm-fid inside ttm-fid-view-lefticon">--}}
{{--                                        <div class="ttm-fid-left">--}}
{{--                                            <div class="ttm-fid-icon-wrapper">--}}
{{--                                                <i class="ti ti-cup"></i>--}}
{{--                                            </div>--}}
{{--                                            <h4 class="ttm-fid-inner">--}}
{{--                                                <span   data-appear-animation = "animateDigits"--}}
{{--                                                        data-from             = "0"--}}
{{--                                                        data-to               = "30"--}}
{{--                                                        data-interval         = "5"--}}
{{--                                                        data-before           = ""--}}
{{--                                                        data-before-style     = "sup"--}}
{{--                                                        data-after            = ""--}}
{{--                                                        data-after-style      = "sub"--}}
{{--                                                >30</span><span>+</span>--}}
{{--                                            </h4>--}}
{{--                                        </div>--}}
{{--                                        <div class="ttm-fid-contents">--}}
{{--                                            <h3 class="ttm-fid-title">Years Experiance</h3>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div><!-- row end-->--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div><!-- row end -->--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!--broken-section end-->--}}


{{--        <!--blog-section-->--}}
{{--        <section class="ttm-row portfolio-section bg-img2 clearfix">--}}
{{--            <div class="container">--}}
{{--                <!-- row -->--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-12">--}}
{{--                        <div class="ttm-tabs">--}}
{{--                            <!-- section-title -->--}}
{{--                            <div class="section-title width-36">--}}
{{--                                <div class="title-header">--}}
{{--                                    <h5>RECENTLY COMPLETED</h5>--}}
{{--                                    <h2 class="title">Our Latest Projects</h2>--}}
{{--                                </div>--}}
{{--                            </div><!-- section-title end -->--}}
{{--                            <ul class="tabs text-right width-64 mt-35 res-1199-mt-0 res-1199-mb-20">--}}
{{--                                <li class="tab active"><a href="#"> All </a></li>--}}
{{--                                <li class="tab"><a href="#">Painting</a></li>--}}
{{--                                <li class="tab"><a href="#">Plumbing</a></li>--}}
{{--                                <li class="tab"><a href="#">Home Maintenance</a></li>--}}
{{--                                <li class="tab"><a href="#">Flooring</a></li>--}}
{{--                                <li class="tab"><a href="#">Electrical</a></li>--}}
{{--                            </ul><!-- flat-tab end -->--}}
{{--                            <div class="content-tab width-100">--}}
{{--                                <!-- content-inner -->--}}
{{--                                <div class="content-inner active">--}}
{{--                                    <div class="row multi-columns-row ttm-boxes-spacing-10px">--}}
{{--                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">--}}
{{--                                            <!-- featured-imagebox -->--}}
{{--                                            <div class="featured-imagebox featured-imagebox-portfolio">--}}
{{--                                                <!-- featured-thumbnail -->--}}
{{--                                                <div class="featured-thumbnail">--}}
{{--                                                    <a href="#"> <img class="img-fluid" src="images/portfolio/01.jpg" alt="image"></a>--}}
{{--                                                </div><!-- featured-thumbnail end-->--}}
{{--                                                <!-- ttm-box-view-overlay -->--}}
{{--                                                <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">--}}
{{--                                                    <div class="ttm-box-view-content-inner">--}}
{{--                                                        <div class="featured-content featured-content-portfolio">--}}
{{--                                                            <span class="category">--}}
{{--                                                                <a href="portfolio-category.html">Painting</a>,--}}
{{--                                                                <a href="portfolio-category.html">Plumbing</a>--}}
{{--                                                            </span>--}}
{{--                                                            <h2 class="featured-title"><a href="portfolio-style-1.html">Plumbing, New York</a></h2>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div><!-- ttm-box-view-overlay end-->--}}
{{--                                            </div><!-- featured-imagebox -->--}}
{{--                                        </div>--}}
{{--                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">--}}
{{--                                            <!-- featured-imagebox -->--}}
{{--                                            <div class="featured-imagebox featured-imagebox-portfolio">--}}
{{--                                                <!-- featured-thumbnail -->--}}
{{--                                                <div class="featured-thumbnail">--}}
{{--                                                    <a href="#"> <img class="img-fluid" src="images/portfolio/02.jpg" alt="image"></a>--}}
{{--                                                </div><!-- featured-thumbnail end-->--}}
{{--                                                <!-- ttm-box-view-overlay -->--}}
{{--                                                <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">--}}
{{--                                                    <div class="ttm-box-view-content-inner">--}}
{{--                                                        <div class="featured-content featured-content-portfolio">--}}
{{--                                                            <span class="category">--}}
{{--                                                                <a href="portfolio-category.html">Tiles repair, Austin</a>--}}
{{--                                                            </span>--}}
{{--                                                            <h2 class="featured-title"><a href="portfolio-style-2.html">Home Maintenance</a></h2>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div><!-- ttm-box-view-overlay end-->--}}
{{--                                            </div><!-- featured-imagebox -->--}}
{{--                                        </div>--}}
{{--                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">--}}
{{--                                            <!-- featured-imagebox -->--}}
{{--                                            <div class="featured-imagebox featured-imagebox-portfolio">--}}
{{--                                                <!-- featured-thumbnail -->--}}
{{--                                                <div class="featured-thumbnail">--}}
{{--                                                    <a href="#"> <img class="img-fluid" src="images/portfolio/03.jpg" alt="image"></a>--}}
{{--                                                </div><!-- featured-thumbnail end-->--}}
{{--                                                <!-- ttm-box-view-overlay -->--}}
{{--                                                <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">--}}
{{--                                                    <div class="ttm-box-view-content-inner">--}}
{{--                                                        <div class="featured-content featured-content-portfolio">--}}
{{--                                                            <span class="category">--}}
{{--                                                                <a href="portfolio-category.html">Flooring</a>,--}}
{{--                                                                <a href="portfolio-category.html">Plumbing</a>--}}
{{--                                                            </span>--}}
{{--                                                            <h2 class="featured-title"><a href="portfolio-style-3.html">Floor Flooring, Bunnell</a></h2>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div><!-- ttm-box-view-overlay end-->--}}
{{--                                            </div><!-- featured-imagebox -->--}}
{{--                                        </div>--}}
{{--                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">--}}
{{--                                            <!-- featured-imagebox -->--}}
{{--                                            <div class="featured-imagebox featured-imagebox-portfolio">--}}
{{--                                                <!-- featured-thumbnail -->--}}
{{--                                                <div class="featured-thumbnail">--}}
{{--                                                    <a href="#"> <img class="img-fluid" src="images/portfolio/04.jpg" alt="image"></a>--}}
{{--                                                </div><!-- featured-thumbnail end-->--}}
{{--                                                <!-- ttm-box-view-overlay -->--}}
{{--                                                <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">--}}
{{--                                                    <div class="ttm-box-view-content-inner">--}}
{{--                                                        <div class="featured-content featured-content-portfolio">--}}
{{--                                                            <span class="category">--}}
{{--                                                                <a href="portfolio-category.html">Flooring</a>,--}}
{{--                                                                <a href="portfolio-category.html">Home Maintenance</a>--}}
{{--                                                            </span>--}}
{{--                                                            <h2 class="featured-title"><a href="portfolio-style-1.html">Drywall Insulation, Captown</a></h2>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div><!-- ttm-box-view-overlay end-->--}}
{{--                                            </div><!-- featured-imagebox -->--}}
{{--                                        </div>--}}
{{--                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">--}}
{{--                                            <!-- featured-imagebox -->--}}
{{--                                            <div class="featured-imagebox featured-imagebox-portfolio">--}}
{{--                                                <!-- featured-thumbnail -->--}}
{{--                                                <div class="featured-thumbnail">--}}
{{--                                                    <a href="#"> <img class="img-fluid" src="images/portfolio/05.jpg" alt="image"></a>--}}
{{--                                                </div><!-- featured-thumbnail end-->--}}
{{--                                                <!-- ttm-box-view-overlay -->--}}
{{--                                                <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">--}}
{{--                                                    <div class="ttm-box-view-content-inner">--}}
{{--                                                        <div class="featured-content featured-content-portfolio">--}}
{{--                                                            <span class="category">--}}
{{--                                                                <a href="portfolio-category.html">Electrical</a>,--}}
{{--                                                                <a href="portfolio-category.html">Painting</a>--}}
{{--                                                            </span>--}}
{{--                                                            <h2 class="featured-title"><a href="portfolio-style-2.html">Electrical wiring, San Jose</a></h2>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div><!-- ttm-box-view-overlay end-->--}}
{{--                                            </div><!-- featured-imagebox -->--}}
{{--                                        </div>--}}
{{--                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">--}}
{{--                                            <!-- featured-imagebox -->--}}
{{--                                            <div class="featured-imagebox featured-imagebox-portfolio">--}}
{{--                                                <!-- featured-thumbnail -->--}}
{{--                                                <div class="featured-thumbnail">--}}
{{--                                                    <a href="#"> <img class="img-fluid" src="images/portfolio/06.jpg" alt="image"></a>--}}
{{--                                                </div><!-- featured-thumbnail end -->--}}
{{--                                                <!-- ttm-box-view-overlay -->--}}
{{--                                                <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">--}}
{{--                                                    <div class="ttm-box-view-content-inner">--}}
{{--                                                        <div class="featured-content featured-content-portfolio">--}}
{{--                                                            <span class="category">--}}
{{--                                                                <a href="portfolio-category.html">Electrical</a>,--}}
{{--                                                                <a href="portfolio-category.html">Home Maintenance</a>--}}
{{--                                                            </span>--}}
{{--                                                            <h2 class="featured-title"><a href="portfolio-style-3.html">Fireplace cleaning, Portland</a></h2>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div><!-- ttm-box-view-overlay end-->--}}
{{--                                            </div><!-- featured-imagebox -->--}}
{{--                                        </div>--}}
{{--                                    </div><!-- row end -->--}}
{{--                                </div>--}}
{{--                                <div class="content-inner">--}}
{{--                                    <div class="row multi-columns-row ttm-boxes-spacing-5px">--}}
{{--                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">--}}
{{--                                            <!-- featured-imagebox -->--}}
{{--                                            <div class="featured-imagebox featured-imagebox-portfolio">--}}
{{--                                                <!-- featured-thumbnail -->--}}
{{--                                                <div class="featured-thumbnail">--}}
{{--                                                    <a href="#"> <img class="img-fluid" src="images/portfolio/01.jpg" alt="image"></a>--}}
{{--                                                </div><!-- featured-thumbnail end-->--}}
{{--                                                <!-- ttm-box-view-overlay -->--}}
{{--                                                <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">--}}
{{--                                                    <div class="ttm-box-view-content-inner">--}}
{{--                                                        <div class="featured-content featured-content-portfolio">--}}
{{--                                                            <span class="category">--}}
{{--                                                                <a href="portfolio-category.html">Painting</a>,--}}
{{--                                                                <a href="portfolio-category.html">Plumbing</a>--}}
{{--                                                            </span>--}}
{{--                                                            <h2 class="featured-title"><a href="portfolio-style-1.html">Plumbing, New York</a></h2>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div><!-- ttm-box-view-overlay end-->--}}
{{--                                            </div><!-- featured-imagebox -->--}}
{{--                                        </div>--}}
{{--                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">--}}
{{--                                            <!-- featured-imagebox -->--}}
{{--                                            <div class="featured-imagebox featured-imagebox-portfolio">--}}
{{--                                                <!-- featured-thumbnail -->--}}
{{--                                                <div class="featured-thumbnail">--}}
{{--                                                    <a href="#"> <img class="img-fluid" src="images/portfolio/05.jpg" alt="image"></a>--}}
{{--                                                </div><!-- featured-thumbnail end-->--}}
{{--                                                <!-- ttm-box-view-overlay -->--}}
{{--                                                <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">--}}
{{--                                                    <div class="ttm-box-view-content-inner">--}}
{{--                                                        <div class="featured-content featured-content-portfolio">--}}
{{--                                                            <span class="category">--}}
{{--                                                                <a href="portfolio-category.html">Electrical</a>,--}}
{{--                                                                <a href="portfolio-category.html">Painting</a>--}}
{{--                                                            </span>--}}
{{--                                                            <h2 class="featured-title"><a href="portfolio-style-2.html">Electrical wiring, San Jose</a></h2>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div><!-- ttm-box-view-overlay end-->--}}
{{--                                            </div><!-- featured-imagebox -->--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="content-inner">--}}
{{--                                    <div class="row multi-columns-row ttm-boxes-spacing-5px">--}}
{{--                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">--}}
{{--                                            <!-- featured-imagebox -->--}}
{{--                                            <div class="featured-imagebox featured-imagebox-portfolio">--}}
{{--                                                <!-- featured-thumbnail -->--}}
{{--                                                <div class="featured-thumbnail">--}}
{{--                                                    <a href="#"> <img class="img-fluid" src="images/portfolio/01.jpg" alt="image"></a>--}}
{{--                                                </div><!-- featured-thumbnail end-->--}}
{{--                                                <!-- ttm-box-view-overlay -->--}}
{{--                                                <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">--}}
{{--                                                    <div class="ttm-box-view-content-inner">--}}
{{--                                                        <div class="featured-content featured-content-portfolio">--}}
{{--                                                            <span class="category">--}}
{{--                                                                <a href="portfolio-category.html">Painting</a>,--}}
{{--                                                                <a href="portfolio-category.html">Plumbing</a>--}}
{{--                                                            </span>--}}
{{--                                                            <h2 class="featured-title"><a href="portfolio-style-1.html">Plumbing, New York</a></h2>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div><!-- ttm-box-view-overlay end-->--}}
{{--                                            </div><!-- featured-imagebox -->--}}
{{--                                        </div>--}}
{{--                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">--}}
{{--                                            <!-- featured-imagebox -->--}}
{{--                                            <div class="featured-imagebox featured-imagebox-portfolio">--}}
{{--                                                <!-- featured-thumbnail -->--}}
{{--                                                <div class="featured-thumbnail">--}}
{{--                                                    <a href="#"> <img class="img-fluid" src="images/portfolio/03.jpg" alt="image"></a>--}}
{{--                                                </div><!-- featured-thumbnail end-->--}}
{{--                                                <!-- ttm-box-view-overlay -->--}}
{{--                                                <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">--}}
{{--                                                    <div class="ttm-box-view-content-inner">--}}
{{--                                                        <div class="featured-content featured-content-portfolio">--}}
{{--                                                            <span class="category">--}}
{{--                                                                <a href="portfolio-category.html">Flooring</a>,--}}
{{--                                                                <a href="portfolio-category.html">Plumbing</a>--}}
{{--                                                            </span>--}}
{{--                                                            <h2 class="featured-title"><a href="portfolio-style-3.html">Floor Flooring, Bunnell</a></h2>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div><!-- ttm-box-view-overlay end-->--}}
{{--                                            </div><!-- featured-imagebox -->--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="content-inner">--}}
{{--                                    <div class="row multi-columns-row ttm-boxes-spacing-5px">--}}
{{--                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">--}}
{{--                                            <!-- featured-imagebox -->--}}
{{--                                            <div class="featured-imagebox featured-imagebox-portfolio">--}}
{{--                                                <!-- featured-thumbnail -->--}}
{{--                                                <div class="featured-thumbnail">--}}
{{--                                                    <a href="#"> <img class="img-fluid" src="images/portfolio/02.jpg" alt="image"></a>--}}
{{--                                                </div><!-- featured-thumbnail end-->--}}
{{--                                                <!-- ttm-box-view-overlay -->--}}
{{--                                                <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">--}}
{{--                                                    <div class="ttm-box-view-content-inner">--}}
{{--                                                        <div class="featured-content featured-content-portfolio">--}}
{{--                                                            <span class="category">--}}
{{--                                                                <a href="portfolio-category.html">Tiles repair, Austin</a>--}}
{{--                                                            </span>--}}
{{--                                                            <h2 class="featured-title"><a href="portfolio-style-2.html">Home Maintenance</a></h2>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div><!-- ttm-box-view-overlay end-->--}}
{{--                                            </div><!-- featured-imagebox -->--}}
{{--                                        </div>--}}
{{--                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">--}}
{{--                                            <!-- featured-imagebox -->--}}
{{--                                            <div class="featured-imagebox featured-imagebox-portfolio">--}}
{{--                                                <!-- featured-thumbnail -->--}}
{{--                                                <div class="featured-thumbnail">--}}
{{--                                                    <a href="#"> <img class="img-fluid" src="images/portfolio/04.jpg" alt="image"></a>--}}
{{--                                                </div><!-- featured-thumbnail end-->--}}
{{--                                                <!-- ttm-box-view-overlay -->--}}
{{--                                                <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">--}}
{{--                                                    <div class="ttm-box-view-content-inner">--}}
{{--                                                        <div class="featured-content featured-content-portfolio">--}}
{{--                                                            <span class="category">--}}
{{--                                                                <a href="portfolio-category.html">Flooring</a>,--}}
{{--                                                                <a href="portfolio-category.html">Home Maintenance</a>--}}
{{--                                                            </span>--}}
{{--                                                            <h2 class="featured-title"><a href="portfolio-style-1.html">Drywall Insulation, Captown</a></h2>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div><!-- ttm-box-view-overlay end-->--}}
{{--                                            </div><!-- featured-imagebox -->--}}
{{--                                        </div>--}}
{{--                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">--}}
{{--                                            <!-- featured-imagebox -->--}}
{{--                                            <div class="featured-imagebox featured-imagebox-portfolio">--}}
{{--                                                <!-- featured-thumbnail -->--}}
{{--                                                <div class="featured-thumbnail">--}}
{{--                                                    <a href="#"> <img class="img-fluid" src="images/portfolio/06.jpg" alt="image"></a>--}}
{{--                                                </div><!-- featured-thumbnail end -->--}}
{{--                                                <!-- ttm-box-view-overlay -->--}}
{{--                                                <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">--}}
{{--                                                    <div class="ttm-box-view-content-inner">--}}
{{--                                                        <div class="featured-content featured-content-portfolio">--}}
{{--                                                            <span class="category">--}}
{{--                                                                <a href="portfolio-category.html">Electrical</a>,--}}
{{--                                                                <a href="portfolio-category.html">Home Maintenance</a>--}}
{{--                                                            </span>--}}
{{--                                                            <h2 class="featured-title"><a href="portfolio-style-3.html">Fireplace cleaning, Portland</a></h2>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div><!-- ttm-box-view-overlay end-->--}}
{{--                                            </div><!-- featured-imagebox -->--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="content-inner">--}}
{{--                                    <div class="row multi-columns-row ttm-boxes-spacing-5px">--}}
{{--                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">--}}
{{--                                            <!-- featured-imagebox -->--}}
{{--                                            <div class="featured-imagebox featured-imagebox-portfolio">--}}
{{--                                                <!-- featured-thumbnail -->--}}
{{--                                                <div class="featured-thumbnail">--}}
{{--                                                    <a href="#"> <img class="img-fluid" src="images/portfolio/03.jpg" alt="image"></a>--}}
{{--                                                </div><!-- featured-thumbnail end-->--}}
{{--                                                <!-- ttm-box-view-overlay -->--}}
{{--                                                <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">--}}
{{--                                                    <div class="ttm-box-view-content-inner">--}}
{{--                                                        <div class="featured-content featured-content-portfolio">--}}
{{--                                                            <span class="category">--}}
{{--                                                                <a href="portfolio-category.html">Flooring</a>,--}}
{{--                                                                <a href="portfolio-category.html">Plumbing</a>--}}
{{--                                                            </span>--}}
{{--                                                            <h2 class="featured-title"><a href="portfolio-style-3.html">Floor Flooring, Bunnell</a></h2>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div><!-- ttm-box-view-overlay end-->--}}
{{--                                            </div><!-- featured-imagebox -->--}}
{{--                                        </div>--}}
{{--                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">--}}
{{--                                            <!-- featured-imagebox -->--}}
{{--                                            <div class="featured-imagebox featured-imagebox-portfolio">--}}
{{--                                                <!-- featured-thumbnail -->--}}
{{--                                                <div class="featured-thumbnail">--}}
{{--                                                    <a href="#"> <img class="img-fluid" src="images/portfolio/04.jpg" alt="image"></a>--}}
{{--                                                </div><!-- featured-thumbnail end-->--}}
{{--                                                <!-- ttm-box-view-overlay -->--}}
{{--                                                <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">--}}
{{--                                                    <div class="ttm-box-view-content-inner">--}}
{{--                                                        <div class="featured-content featured-content-portfolio">--}}
{{--                                                            <span class="category">--}}
{{--                                                                <a href="portfolio-category.html">Flooring</a>,--}}
{{--                                                                <a href="portfolio-category.html">Home Maintenance</a>--}}
{{--                                                            </span>--}}
{{--                                                            <h2 class="featured-title"><a href="portfolio-style-1.html">Drywall Insulation, Captown</a></h2>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div><!-- ttm-box-view-overlay end-->--}}
{{--                                            </div><!-- featured-imagebox -->--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="content-inner">--}}
{{--                                    <div class="row multi-columns-row ttm-boxes-spacing-5px">--}}
{{--                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">--}}
{{--                                            <!-- featured-imagebox -->--}}
{{--                                            <div class="featured-imagebox featured-imagebox-portfolio">--}}
{{--                                                <!-- featured-thumbnail -->--}}
{{--                                                <div class="featured-thumbnail">--}}
{{--                                                    <a href="#"> <img class="img-fluid" src="images/portfolio/05.jpg" alt="image"></a>--}}
{{--                                                </div><!-- featured-thumbnail end-->--}}
{{--                                                <!-- ttm-box-view-overlay -->--}}
{{--                                                <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">--}}
{{--                                                    <div class="ttm-box-view-content-inner">--}}
{{--                                                        <div class="featured-content featured-content-portfolio">--}}
{{--                                                            <span class="category">--}}
{{--                                                                <a href="portfolio-category.html">Electrical</a>,--}}
{{--                                                                <a href="portfolio-category.html">Painting</a>--}}
{{--                                                            </span>--}}
{{--                                                            <h2 class="featured-title"><a href="portfolio-style-2.html">Electrical wiring, San Jose</a></h2>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div><!-- ttm-box-view-overlay end-->--}}
{{--                                            </div><!-- featured-imagebox -->--}}
{{--                                        </div>--}}
{{--                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">--}}
{{--                                            <!-- featured-imagebox -->--}}
{{--                                            <div class="featured-imagebox featured-imagebox-portfolio">--}}
{{--                                                <!-- featured-thumbnail -->--}}
{{--                                                <div class="featured-thumbnail">--}}
{{--                                                    <a href="#"> <img class="img-fluid" src="images/portfolio/06.jpg" alt="image"></a>--}}
{{--                                                </div><!-- featured-thumbnail end -->--}}
{{--                                                <!-- ttm-box-view-overlay -->--}}
{{--                                                <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">--}}
{{--                                                    <div class="ttm-box-view-content-inner">--}}
{{--                                                        <div class="featured-content featured-content-portfolio">--}}
{{--                                                            <span class="category">--}}
{{--                                                                <a href="portfolio-category.html">Electrical</a>,--}}
{{--                                                                <a href="portfolio-category.html">Home Maintenance</a>--}}
{{--                                                            </span>--}}
{{--                                                            <h2 class="featured-title"><a href="portfolio-style-3.html">Fireplace cleaning, Portland</a></h2>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div><!-- ttm-box-view-overlay end-->--}}
{{--                                            </div><!-- featured-imagebox -->--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div><!-- row end-->--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <!--blog-section end-->--}}

{{--        <!--services-section-->--}}
{{--        <section class="ttm-row services-section bg-layer bg-layer-equal-height break-991-colum res-991-mt-0 clearfix">--}}
{{--            <div class="container">--}}
{{--                <!-- row -->--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-8 col-md-12">--}}
{{--                        <!-- about-content -->--}}
{{--                        <div class="about-content ttm-bg ttm-col-bgcolor-yes ttm-left-span ttm-bgcolor-darkgrey spacing-3">--}}
{{--                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>--}}
{{--                            <div class="layer-content">--}}
{{--                                <!-- section title -->--}}
{{--                                <div class="section-title with-desc clearfix">--}}
{{--                                    <div class="title-header">--}}
{{--                                        <h5>OUR SKILLS</h5>--}}
{{--                                        <h2 class="title">Professional Main Services</h2>--}}
{{--                                    </div>--}}
{{--                                    <div class="title-desc">Boldman has 10+ years of experience with providing wide area of specialty services works listed below.</div>--}}
{{--                                </div><!-- section title end -->--}}
{{--                                <div class="separator clearfix">--}}
{{--                                    <div class="sep-line mt-10 mb-25"></div>--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        <!--featured-icon-box-->--}}
{{--                                        <div class="featured-icon-box iconalign-before-heading ttm-icon_element-size-sm">--}}
{{--                                            <div class="featured-content">--}}
{{--                                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">--}}
{{--                                                    <i class="ti ti-package"></i>--}}
{{--                                                </div>--}}
{{--                                                <div class="featured-title ttm-textcolor-skincolor">--}}
{{--                                                    <h6>10+ years experience</h6>--}}
{{--                                                    <h5>Plumber Services</h5>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="featured-desc">--}}
{{--                                                <p>Plumbing is such a sphere in our houses that requires some</p>--}}
{{--                                            </div>--}}
{{--                                            <a class="ttm-btn ttm-btn-size-sm ttm-icon-btn-right ttm-btn-color-white btn-inline mb-10" href="#">View More<i class="ti ti-angle-double-right"></i></a>--}}
{{--                                        </div><!-- featured-icon-box end-->--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        <!--featured-icon-box-->--}}
{{--                                        <div class="featured-icon-box iconalign-before-heading ttm-icon_element-size-lg">--}}
{{--                                            <div class="featured-content">--}}
{{--                                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">--}}
{{--                                                    <i class="ti ti-stamp"></i>--}}
{{--                                                </div>--}}
{{--                                                <div class="featured-title ttm-textcolor-skincolor">--}}
{{--                                                    <h6>15+ years experience</h6>--}}
{{--                                                    <h5>Painting Services</h5>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="featured-desc">--}}
{{--                                                <p>Plumbing is such a sphere in our houses that requires some</p>--}}
{{--                                            </div>--}}
{{--                                            <a class="ttm-btn ttm-btn-size-sm ttm-icon-btn-right ttm-btn-color-white btn-inline mb-10" href="#">View More<i class="ti ti-angle-double-right"></i></a>--}}
{{--                                        </div><!-- featured-icon-box end-->--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="res-991-pt-20 res-991-pb-50">--}}
{{--                                    <!-- ttm-progress-bar -->--}}
{{--                                    <div class="ttm-progress-bar">--}}
{{--                                        <h4>Production</h4>--}}
{{--                                        <div class="progress" data-value="85%">--}}
{{--                                            <div class="progress-bar progress-bar-color-bar_skincolor">--}}
{{--                                                <div class="progress-parcent"><span>85</span>%</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div><!-- ttm-progress-bar end -->--}}
{{--                                    <!-- ttm-progress-bar -->--}}
{{--                                    <div class="ttm-progress-bar">--}}
{{--                                        <h4>Design</h4>--}}
{{--                                        <div class="progress" data-value="70%">--}}
{{--                                            <div class="progress-bar progress-bar-color-bar_skincolor">--}}
{{--                                                <div class="progress-parcent"><span>70</span>%</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div><!-- ttm-progress-bar end -->--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div><!-- about-content end-->--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-12">--}}
{{--                        <!-- col-img-img-two -->--}}
{{--                        <div class="col-bg-img-two ttm-col-bgimage-yes ttm-bg ttm-right-span">--}}
{{--                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer ml_80">--}}
{{--                                <div class="col-bg-img-thirteen"></div>--}}
{{--                            </div>--}}
{{--                            <div class="layer-content"></div>--}}
{{--                        </div><!-- col-img-bg-img-two end-->--}}
{{--                        <img src="images/bg-image/col-bgimage-2.jpg" class="ttm-equal-height-image" alt="bg-image">--}}
{{--                    </div>--}}
{{--                </div><!-- row end -->--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <!--services-section end-->--}}

{{--        <!--only-title-section-->--}}
{{--        <section class="ttm-row only-title-section ttm-bgcolor-skincolor mt_70 res-991-mt-0 clearfix">--}}
{{--            <div class="container">--}}
{{--                <!-- row -->--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-9 col-md-12">--}}
{{--                        <!-- section-title -->--}}
{{--                        <div class="section-title style2 clearfix">--}}
{{--                            <div class="title-header">--}}
{{--                                <h5>WORKING WITH EXCELLENT</h5>--}}
{{--                                <h2 class="title">Our Great Team</h2>--}}
{{--                            </div>--}}
{{--                            <div class="title-desc">Our people at Boldman are most valuable assets. They are the faces of our organization.</div>--}}
{{--                        </div><!-- section-title end -->--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 col-md-12">--}}
{{--                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-icon-btn-right ttm-btn-style-border ttm-btn-color-white mt-15 mb-30 float-right res-991-mb-0" href="#">VIEW MORE TEAM<i class="ti ti-angle-double-right"></i></a>--}}
{{--                    </div>--}}
{{--                </div><!-- row end -->--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <!--only-title-section-->--}}


{{--        <!--team-section-->--}}
{{--        <section class="ttm-row team-section mt_150 res-991-mt_15 clearfix">--}}
{{--            <div class="container">--}}
{{--                <!-- row -->--}}
{{--                <div class="row">--}}
{{--                    <div class="wrap-team team-slide owl-carousel" data-item="3" data-nav="false" data-dots="false" data-auto="false">--}}
{{--                        <!-- featured-imagebox-team -->--}}
{{--                        <div class="featured-imagebox featured-imagebox-team ttm-team-box-view-overlay">--}}
{{--                            <div class="featured-thumbnail">--}}
{{--                                <img class="img-fluid" src="images/team-member/team-img01.jpg" alt="image">--}}
{{--                            </div>--}}
{{--                            <div class="featured-content featured-content-team">--}}
{{--                                <div class="featured-title">--}}
{{--                                    <h5><a href="team-details.html">Alex Edward</a></h5>--}}
{{--                                </div>--}}
{{--                                <p class="category">Plumber</p>--}}
{{--                                <div class="ttm-social-links-wrapper">--}}
{{--                                    <ul class="social-icons list-inline">--}}
{{--                                        <li class="social-facebook"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>--}}
{{--                                        <li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>--}}
{{--                                        <li class="social-gplus"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="Google+"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div><!-- featured-imagebox-team end-->--}}
{{--                        <!-- featured-imagebox-team -->--}}
{{--                        <div class="featured-imagebox featured-imagebox-team ttm-team-box-view-overlay">--}}
{{--                            <div class="featured-thumbnail">--}}
{{--                                <img class="img-fluid" src="images/team-member/team-img02.jpg" alt="image">--}}
{{--                            </div>--}}
{{--                            <div class="featured-content featured-content-team">--}}
{{--                                <div class="featured-title">--}}
{{--                                    <h5><a href="team-details.html">Harly Rayan</a></h5>--}}
{{--                                </div>--}}
{{--                                <p class="category">Electrician</p>--}}
{{--                                <div class="ttm-social-links-wrapper">--}}
{{--                                    <ul class="social-icons list-inline">--}}
{{--                                        <li class="social-facebook"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>--}}
{{--                                        <li class="social-twitter"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>--}}
{{--                                        <li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div><!-- featured-imagebox-team end-->--}}
{{--                        <!-- featured-imagebox-team -->--}}
{{--                        <div class="featured-imagebox featured-imagebox-team ttm-team-box-view-overlay">--}}
{{--                            <div class="featured-thumbnail">--}}
{{--                                <img class="img-fluid" src="images/team-member/team-img03.jpg" alt="image">--}}
{{--                            </div>--}}
{{--                            <div class="featured-content featured-content-team">--}}
{{--                                <div class="featured-title">--}}
{{--                                    <h5><a href="team-details.html">Andrew Bon</a></h5>--}}
{{--                                </div>--}}
{{--                                <p class="category">Cleaner</p>--}}
{{--                                <div class="ttm-social-links-wrapper">--}}
{{--                                    <ul class="social-icons list-inline">--}}
{{--                                        <li class="social-facebook"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>--}}
{{--                                        <li class="social-twitter"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>--}}
{{--                                        <li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="Youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div><!-- featured-imagebox-team end-->--}}
{{--                        <!-- featured-imagebox-team -->--}}
{{--                        <div class="featured-imagebox featured-imagebox-team ttm-team-box-view-overlay">--}}
{{--                            <div class="featured-thumbnail">--}}
{{--                                <img class="img-fluid" src="images/team-member/team-img04.jpg" alt="image">--}}
{{--                            </div>--}}
{{--                            <div class="featured-content featured-content-team">--}}
{{--                                <div class="featured-title">--}}
{{--                                    <h5><a href="team-details.html">John Martin</a></h5>--}}
{{--                                </div>--}}
{{--                                <p class="category">Home Maintenance</p>--}}
{{--                                <div class="ttm-social-links-wrapper">--}}
{{--                                    <ul class="social-icons list-inline">--}}
{{--                                        <li class="social-facebook"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>--}}
{{--                                        <li class="social-gplus"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="Google+"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>--}}
{{--                                        <li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="Flickr"><i class="fa fa-flickr" aria-hidden="true"></i></a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div><!-- featured-imagebox-team end-->--}}
{{--                    </div>--}}
{{--                </div><!-- row end -->--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <!--team-section end-->--}}


{{--        <!--blog-section-->--}}
{{--        <section class="ttm-row blog-section bg-img3 clearfix">--}}
{{--            <div class="container">--}}
{{--                <!-- row -->--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-9 col-md-12">--}}
{{--                        <!-- section-title -->--}}
{{--                        <div class="section-title style2 clearfix">--}}
{{--                            <div class="title-header">--}}
{{--                                <h5>WORKING WITH EXCELLENT</h5>--}}
{{--                                <h2 class="title">Latest News & Blog</h2>--}}
{{--                            </div>--}}
{{--                            <div class="title-desc">Boldman has 10+ years of experience with providing wide area of specialty services works listed below.</div>--}}
{{--                        </div><!-- section-title end -->--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 col-md-12">--}}
{{--                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-icon-btn-right ttm-btn-style-border ttm-btn-color-black mt-15 mb-30 float-right" href="#">MORE NEWS<i class="ti ti-angle-double-right"></i></a>--}}
{{--                    </div>--}}
{{--                </div><!-- row end -->--}}
{{--                <!-- row -->--}}
{{--                <div class="row">--}}
{{--                    <!-- post-slide -->--}}
{{--                    <div class="post-slide owl-carousel owl-theme owl-loaded" data-item="3" data-nav="false" data-dots="false" data-auto="false">--}}
{{--                        <!-- featured-imagebox-post -->--}}
{{--                        <div class="featured-imagebox featured-imagebox-post">--}}
{{--                            <div class="featured-thumbnail">--}}
{{--                                <img class="img-fluid" src="images/blog/01.jpg" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="featured-content featured-content-post">--}}
{{--                                <div class="post-meta">--}}
{{--                                    <span class="ttm-meta-line"><i class="fa fa-calendar"></i><a href="single-blog.html">January 16, 2019</a></span>--}}
{{--                                </div>--}}
{{--                                <div class="post-title featured-title">--}}
{{--                                    <h5><a href="single-blog.html">Equipping Researchers in the Developing.</a></h5>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div><!-- featured-imagebox-post end -->--}}
{{--                        <!-- featured-imagebox-post -->--}}
{{--                        <div class="featured-imagebox featured-imagebox-post">--}}
{{--                            <div class="featured-thumbnail">--}}
{{--                                <img class="img-fluid" src="images/blog/02.jpg" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="featured-content featured-content-post">--}}
{{--                                <div class="post-meta">--}}
{{--                                    <span class="ttm-meta-line"><i class="fa fa-calendar"></i><a href="single-blog.html">January 31, 2019</a></span>--}}
{{--                                </div>--}}
{{--                                <div class="post-title featured-title">--}}
{{--                                    <h5><a href="single-blog.html">Simple Steps for Replacing old Tiling</a></h5>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div><!-- featured-imagebox-post end -->--}}
{{--                        <!-- featured-imagebox-post -->--}}
{{--                        <div class="featured-imagebox featured-imagebox-post">--}}
{{--                            <div class="featured-thumbnail">--}}
{{--                                <img class="img-fluid" src="images/blog/03.jpg" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="featured-content featured-content-post">--}}
{{--                                <div class="post-meta">--}}
{{--                                    <span class="ttm-meta-line"><i class="fa fa-calendar"></i><a href="single-blog.html">February 5, 2019</a></span>--}}
{{--                                </div>--}}
{{--                                <div class="post-title featured-title">--}}
{{--                                    <h5><a href="single-blog.html">Danger of Having High Water Pressure</a></h5>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div><!-- featured-imagebox-post end-->--}}
{{--                        <!-- featured-imagebox-post -->--}}
{{--                        <div class="featured-imagebox featured-imagebox-post">--}}
{{--                            <div class="featured-thumbnail">--}}
{{--                                <img class="img-fluid" src="images/blog/04.jpg" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="featured-content featured-content-post">--}}
{{--                                <div class="post-meta">--}}
{{--                                    <span class="ttm-meta-line"><i class="fa fa-calendar"></i><a href="single-blog.html">March 6, 2019</a></span>--}}
{{--                                </div>--}}
{{--                                <div class="post-title featured-title">--}}
{{--                                    <h5><a href="single-blog.html">When have a problem with Cracked Pipes</a></h5>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div><!-- featured-imagebox-post end-->--}}
{{--                        <!-- featured-imagebox-post -->--}}
{{--                        <div class="featured-imagebox featured-imagebox-post">--}}
{{--                            <div class="ttm-post-format-video">--}}
{{--                                <iframe src="https://www.youtube.com/embed/nKHiP7NH75E" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                            </div>--}}
{{--                            <div class="featured-content featured-content-post">--}}
{{--                                <div class="post-meta">--}}
{{--                                    <span class="ttm-meta-line"><i class="fa fa-calendar"></i><a href="single-blog.html">March 24, 2019</a></span>--}}
{{--                                </div>--}}
{{--                                <div class="post-title featured-title">--}}
{{--                                    <h5><a href="single-blog.html">Got a Leaking? Hire an experienced Plumber</a></h5>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div><!-- featured-imagebox-post end-->--}}
{{--                    </div>--}}
{{--                </div><!-- row end-->--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <!--blog-section end-->--}}


{{--    </div><!--site-main end-->--}}

    @endsection