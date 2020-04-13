@extends('layouts.main')

@section('content')
    @include('home._slider')
    <div class="site-main">
        <!--row-top-section-->

{{--        <div class="row ttm-fid-row-wrapper">--}}
{{--            <div class="col-md-4 col-sm-4">--}}
{{--                <div class="ttm-fid inside ttm-fid-view-lefticon">--}}
{{--                    <div class="ttm-fid-left">--}}
{{--                        <div class="ttm-fid-icon-wrapper">--}}
{{--                            <i class="ti ti-briefcase"></i>--}}
{{--                        </div>--}}
{{--                        <h4 class="ttm-fid-inner">--}}
{{--                                                <span   data-appear-animation = "animateDigits"--}}
{{--                                                        data-from             = "0"--}}
{{--                                                        data-to               = "350"--}}
{{--                                                        data-interval         = "5"--}}
{{--                                                        data-before           = ""--}}
{{--                                                        data-before-style     = "sup"--}}
{{--                                                        data-after            = ""--}}
{{--                                                        data-after-style      = "sub"--}}
{{--                                                >350</span><span>+</span>--}}
{{--                        </h4>--}}
{{--                    </div>--}}
{{--                    <div class="ttm-fid-contents">--}}
{{--                        <h3 class="ttm-fid-title">Projects Completed</h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-4 col-sm-4">--}}
{{--                <div class="ttm-fid inside ttm-fid-view-lefticon">--}}
{{--                    <div class="ttm-fid-left">--}}
{{--                        <div class="ttm-fid-icon-wrapper">--}}
{{--                            <i class="ti ti-user"></i>--}}
{{--                        </div>--}}
{{--                        <h4 class="ttm-fid-inner">--}}
{{--                                                <span   data-appear-animation = "animateDigits"--}}
{{--                                                        data-from             = "0"--}}
{{--                                                        data-to               = "120"--}}
{{--                                                        data-interval         = "5"--}}
{{--                                                        data-before           = ""--}}
{{--                                                        data-before-style     = "sup"--}}
{{--                                                        data-after            = ""--}}
{{--                                                        data-after-style      = "sub"--}}
{{--                                                >120</span><span>+</span>--}}
{{--                        </h4>--}}
{{--                    </div>--}}
{{--                    <div class="ttm-fid-contents">--}}
{{--                        <h3 class="ttm-fid-title">Work Employed</h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-4 col-sm-4">--}}
{{--                <div class="ttm-fid inside ttm-fid-view-lefticon">--}}
{{--                    <div class="ttm-fid-left">--}}
{{--                        <div class="ttm-fid-icon-wrapper">--}}
{{--                            <i class="ti ti-cup"></i>--}}
{{--                        </div>--}}
{{--                        <h4 class="ttm-fid-inner">--}}
{{--                                                <span   data-appear-animation = "animateDigits"--}}
{{--                                                        data-from             = "0"--}}
{{--                                                        data-to               = "30"--}}
{{--                                                        data-interval         = "5"--}}
{{--                                                        data-before           = ""--}}
{{--                                                        data-before-style     = "sup"--}}
{{--                                                        data-after            = ""--}}
{{--                                                        data-after-style      = "sub"--}}
{{--                                                >30</span><span>+</span>--}}
{{--                        </h4>--}}
{{--                    </div>--}}
{{--                    <div class="ttm-fid-contents">--}}
{{--                        <h3 class="ttm-fid-title">Years Experiance</h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div><!-- row end-->--}}


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
        <!--only-title-section-->


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

    </div><!--site-main end-->
    <script>

    </script>
    @endsection