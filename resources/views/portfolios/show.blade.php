@extends('layouts.main')
@section('content')
    @include('layouts._breadcrumbs')
    <!--site-main start-->
    <div class="site-main">
        <section class="ttm-row pb-25 res-991-pb-0 clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ttm-pf-single-content-wrapper-innerbox ttm-pf-view-top-image">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="ttm-featured-wrapper ttm-portfolio-featured-wrapper">
                                        <img class="img-fluid" src="{{$portfolio_item->getLastImage()}}" alt="{{$portfolio_item->alt_image}}">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="mt-40">
                                        <div class="ttm-portfolio-title">
                                            <h2 class="ttm-pf-detailbox-title">{{$portfolio_item->localization->title}}</h2>
                                        </div>
                                        <p>{!! $portfolio_item->localization->content !!}}</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mt-20">
                                                    <h4>Our Solutions</h4>
                                                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure elit.&nbsp;&nbsp;Ipsum generators on the Internet tend to repeat.</p>
                                                    <!-- featured-icon-box -->
                                                    <div class="featured-icon-box style3 left-icon icon-align-top">
                                                        <div class="featured-icon">
                                                            <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-sm ttm-icon_element-style-rounded">
                                                                <i class="fa fa-cogs"></i>
                                                            </div>
                                                        </div>
                                                        <div class="featured-content">
                                                            <div class="featured-title">
                                                                <h5>Great Technology</h5>
                                                            </div>
                                                            <div class="featured-desc">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- featured-icon-box end -->
                                                    <!-- featured-icon-box -->
                                                    <div class="featured-icon-box left-icon icon-align-top mb-15">
                                                        <div class="featured-icon">
                                                            <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-sm ttm-icon_element-style-rounded">
                                                                <i class="fa fa-hourglass-half"></i>
                                                            </div>
                                                        </div>
                                                        <div class="featured-content">
                                                            <div class="featured-title">
                                                                <h5>Delivery On Time</h5>
                                                            </div>
                                                            <div class="featured-desc">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- featured-icon-box end -->
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="ttm-featured-wrapper ttm-portfolio-featured-wrapper">
                                                    <img class="img-fluid" src="" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.but the majority have suffered&nbsp;anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 ttm-pf-single-detail-box">
                                    <div class="ttm-pf-detailbox">
                                        <ul class="ttm-pf-detailbox-list">
                                            <li class="ttm-pf-details-date">
                                                <i class="fa fa-briefcase"></i>
                                                <span class="ttm-pf-left-details">Project Name </span>
                                                <span class="ttm-pf-right-details">{{$portfolio_item->project_name}}</span>
                                            </li>
                                            <li class="ttm-pf-details-date">
                                                <i class="fa fa-user"></i>
                                                <span class="ttm-pf-left-details">Client </span>
                                                <span class="ttm-pf-right-details">{{$portfolio_item->client}}</span>
                                            </li>
{{--                                            <li class="ttm-pf-details-date">--}}
{{--                                                <i class="fa fa-bookmark-o"></i>--}}
{{--                                                <span class="ttm-pf-left-details">Category </span>--}}
{{--                                                <span class="ttm-pf-right-details">Plumbing</span>--}}
{{--                                            </li>--}}
                                            <li class="ttm-pf-details-date">
                                                <i class="fa fa-calendar"></i>
                                                <span class="ttm-pf-left-details">Date </span>
                                                <span class="ttm-pf-right-details">{{$portfolio_item->duration}}</span>
                                            </li>
{{--                                            <li class="ttm-pf-details-date">--}}
{{--                                                <i class="fa fa-clock-o"></i>--}}
{{--                                                <span class="ttm-pf-left-details">Duration  </span>--}}
{{--                                                <span class="ttm-pf-right-details">1 Months</span>--}}
{{--                                            </li>--}}
                                            <li class="ttm-pf-details-date">
                                                <i class="fa fa-map-marker"></i>
                                                <span class="ttm-pf-left-details">Location </span>
                                                <span class="ttm-pf-right-details">{{$portfolio_item->address}}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ttm-pf-single-content-wrapper-innerbox end-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pt-40 clearfix">
                            <div class="social-icons circle social-hover text-right">
                                <ul class="list-inline mb-0">
                                    <li class="social-facebook"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li class="social-twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li class="social-gplus"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="ttm-nextprev-bottom-nav">
                                <nav class="navigation post-navigation">
                                    <div class="nav-links">
                                        <div class="nav-previous"><a href="#" rel="prev"><span class="meta-nav" aria-hidden="true">Previous</span></a></div>
                                        <div class="nav-next float-right"><a href="#" rel="next"><span class="meta-nav" aria-hidden="true">Next</span></a></div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tttm-pf-single-related-wrapper -->
                <div class="row ttm-pf-single-related-wrapper">
                    <div class="col-lg-12">
                        <h3 class="ttm-pf-single-related-title">Related Projects</h3>
                    </div>
@foreach($portfolios as $item)
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox featured-imagebox-portfolio ttm-box-view-top-image">
                            <div class="ttm-box-view-content-inner">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <a href="#"> <img class="img-fluid" src="{{$item->getLastImage()}}" alt="{{$item->alt_image}}"></a>
                                </div><!-- featured-thumbnail end-->
                                <!-- ttm-box-view-overlay -->
                                <div class="ttm-box-view-overlay">
                                    <div class="featured-iconbox ttm-media-link">
                                        <a class="ttm_prettyphoto ttm_image" title="Plumbing, New York" data-rel="prettyPhoto" href="{{$item->getLastImage()}}"><i class="ti ti-search"></i></a>
                                        <a href="{{route('portfolio.show',[app()->getLocale(),$item->slug])}}" class="ttm_link"><i class="ti ti-link"></i></a>
                                    </div>
                                </div><!-- ttm-box-view-overlay end-->
                            </div>
                            <div class="ttm-box-bottom-content featured-content-portfolio box-shadow2">
                                <span class="category">
                                     <p>{{$item->client}},
                                    {{$item->duration}}</p>
                                </span>
                                <h2 class="featured-title"><a href="{{route('portfolio.show',[app()->getLocale(),$item->slug])}}">{{$item->localization->title}}</a></h2>
                            </div>
                        </div><!-- featured-imagebox -->
                    </div>
                    @endforeach
                </div>
                <!-- tttm-pf-single-related-wrapper end-->
            </div>
        </section>

    </div><!--site-main end-->
@endsection
