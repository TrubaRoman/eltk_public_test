<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="robots" content="noindex" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="/build/images/favicon.png">

    {!! SEOMeta::generate() !!}

    <link rel="stylesheet" type="text/css" href="{{mix('css/layout.css','build')}}"/>



</head>

<body>
<!--page start-->
<div class="page">

    <!-- preloader start -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- preloader end -->
@include('layouts._header')

{{--@section('breadcrumbs',Breadcrumbs::render())--}}
@yield('breadcrumbs')
    <!--site-main start-->
    @yield('content')



    <!--footer start-->
    <footer class="footer widget-footer clearfix">

        <div class="second-footer ttm-textcolor-white">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                        <div class="widget clearfix">
                            <div class="footer-logo">
                                <img id="footer-logo-img" class="img-center" src="/build/images/logo-white.png" alt="">
                            </div>
                            <p>Budujemy Twój sukces</p>
                        </div>
                    </div>
                   <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                                                                    <div class="widget widget_text clearfix">
                                                    <h3 class="widget-title">{{__('/layouts/footer.work-days')}}</h3>
                                                    <div class="textwidget widget-text">
                                                        <div class="ttm-pricelistbox-wrapper ">
                                                            <div class="ttm-timelist-block-wrapper">
                                                                <ul class="ttm-timelist-block">
                                                                    @if(!empty(config('settings.workdays')))
                                                                    <li>{{__('/layouts/footer.weeks-days.'.head(config('settings.workdays')))}} - {{__('/layouts/footer.weeks-days.'.last(config('settings.workdays')))}}</li>
                                                                        <li> {{config('settings.hours_work_open')}} - {{config('settings.hours_work_closed')}}</li>
                                                                    @endif
                                                                    @if(!empty(config('settings.weekend')))
                                                                            <li>{{__('/layouts/footer.weeks-days.'.head(config('settings.weekend')))}} {{(__('/layouts/footer.weeks-days.'.last(config('settings.weekend'))) !== __('/layouts/footer.weeks-days.'.head(config('settings.weekend'))) )?'-'.__('/layouts/footer.weeks-days.'.last(config('settings.weekend'))):''}}<span class="service-time"><strong>{{__('/layouts/footer.closed')}}</strong></span></li>

                                                                        @endif
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
@include('layouts._footer_nav')
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                        <div class="widget widget_text clearfix">
                            <h3 class="widget-title">{{__('/layouts/footer.contact')}}</h3>
                            <div class="textwidget widget-text">
                                <h6 class="ttm-textcolor-skincolor"><a href="tel:{{config('settings.public_phone')}}">{{config('settings.public_phone')}}</a></h6>
                                <p class="ttm-textcolor-skincolor"><a href="mail+to:{{config('settings.public_email')}}">{{config('settings.public_email')}}</a></p>
                                <p>{{config('settings.public_address')}}</p>
                                <p>NIP - {{config('settings.nip')}}</p>


                            </div>
                            <div class="social-icons">
                                @if(count(config('settings.sociallinks')))

                                @endif
                                <ul class="list-inline">
                                    @foreach(config('settings.sociallinks') as $name => $value)
                                        @if($value !==null)
                                            <li><a href="{{$value}}"><i class="fa fa-{{$name}}" aria-hidden="true"></i></a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="bottom-footer-text ttm-textcolor-white">
            <div class="container">
                <div class="row copyright">
                    <div class="col-md-8 ttm-footer2-left">
                        <span>Copyright © 2020&nbsp;<a href="{{config('app.url')}}">{{config('app.name')}}</a>. All rights reserved.</span>
                    </div>
                    <div class="col-md-4 ttm-footer2-right">

                        <span>Development <i class="fa fa-code"></i> 2020&nbsp;<a href="mail+to:trubaroman571@gmail.com">trubaroman571@gmail.com</a></span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->

    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>

    <!--back-to-top end-->


</div><!-- page end -->


<!-- Javascript -->

<script src="{{mix('js/layout.js','build')}}"></script>

<!-- Revolution Slider -->
<script src="{{mix('js/slider.js','build')}}"></script>


<script type="text/javascript">
    $(function(){
        $("#phone").mask("+(99) 999-999-999");
    });
</script>


@if( Route::currentRouteName() == 'contacts' )
    @include('layouts._ajax_contactform')
@elseif(Route::currentRouteName() == 'offers'  )
    @include('layouts._ajax_job_offerts_form')
@elseif(Route::currentRouteName() == 'home'  )
    <script type="text/javascript">jssor_1_slider_init();
    </script>
    @endif
<script>

    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        autoplay:true,
        touchDrag:true,
        autoplayHoverPause:true,

        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

</script>
</body>

</html>