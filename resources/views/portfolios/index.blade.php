@extends('layouts.main')
@section('content')


    <div class="site-main">

        <section class="ttm-row pt-60 pb-110 res-991-pb-70 ttm-bgcolor-grey clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2><strong>Our Latest Projects</strong></h2>
                        <p class="mb-55">Below you’ll see our best industrial projects.&nbsp; We are providing&nbsp;never ending customer support also provide guarantee a very high level of satisfaction for our clients.&nbsp;&nbsp;if you have a question&nbsp; don’t hesitate to email us at <a href="#">info@example.com</a>&nbsp;for more details.</p>
                    </div>
                </div><!-- row end -->
                <div class="row">
                    @if($portfolios != null)
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
                    @endif
                </div>
            </div>
        </section>

    </div><!--site-main end-->
@endsection