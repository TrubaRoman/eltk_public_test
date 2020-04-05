<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" type="text/css" href="{{mix('css/layout.css','build')}}"/>


    <!-- REVOLUTION LAYERS STYLES -->

    <link rel="stylesheet" type="text/css" href="{{mix('revolution/css/slider.css','build')}}"/>

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



    <!--site-main start-->
    @yield('content')



    <!--footer start-->
    <footer class="footer widget-footer clearfix">
        <div class="first-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ttm-footer-cta-wrapper ttm-textcolor-dark ttm-bgcolor-white">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 widget-area">
                                    <div class="featured-icon-box iconalign-before-heading ttm-icon_element-size-lg">
                                        <div class="featured-content">
                                            <div class="featured-icon">
                                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                    <i class="ti ti-email"></i>
                                                </div>
                                            </div>
                                            <div class="featured-title">
                                                <h5>Subscribe To Our Newsletter</h5>
                                                <h6>At vero eos et accusamus et iusto oddummy..</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 widget-area">
                                    <form id="subscribe-form" class="newsletter-form" method="post" action="#" data-mailchimp="true">
                                        <div class="mailchimp-inputbox clearfix" id="subscribe-content">
                                            <p><input type="email" name="email" placeholder="Email Address.." required=""></p>
                                            <p><input type="submit" value="SUBSCRIBE"></p>
                                        </div>
                                        <div id="subscribe-msg"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="second-footer ttm-textcolor-white">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                        <div class="widget clearfix">
                            <div class="footer-logo">
                                <img id="footer-logo-img" class="img-center" src="/build/images/footer-logo.png" alt="">
                            </div>
                            <p>We work to ensure people’s com fort at their company specializing in house holance. During ourour</p>
                        </div>
                        <div class="widget widget_text clearfix">
                            <h3 class="widget-title">Work Days</h3>
                            <div class="textwidget widget-text">
                                <div class="ttm-pricelistbox-wrapper ">
                                    <div class="ttm-timelist-block-wrapper">
                                        <ul class="ttm-timelist-block">
                                            <li>Mon - sat <span class="service-time">09am - 05pm</span></li>
                                            <li>Sunday<span class="service-time"><strong>Closed</strong></span></li>
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
                            <h3 class="widget-title">Get Free Estimate</h3>
                            <div class="textwidget widget-text">
                                <h3 class="ttm-textcolor-skincolor">123-456-78910</h3>
                                <p>Our online scheduling and payment system is safe.</p>
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white mt-15 mb-20" href="#">REQUEST WITH ONLINE FORM</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                        <div class="widget flicker_widget clearfix">
                            <h3 class="widget-title">Flickr</h3>
                            <div class="ttm-flicker-widget-wrapper">
                                <a href="#"><img src="/build/images/flicker/01.jpg" alt="A photo on Flickr" title="themetech-one"></a>
                                <a href="#"><img src="/build/images/flicker/02.jpg" alt="A photo on Flickr" title="themetech-two"></a>
                                <a href="#"><img src="/build/images/flicker/03.jpg" alt="A photo on Flickr" title="themetech-three"></a>
                                <a href="#"><img src="/build/images/flicker/04.jpg" alt="A photo on Flickr" title="themetech-four"></a>
                                <a href="#"><img src="/build/images/flicker/05.jpg" alt="A photo on Flickr" title="themetech-five"></a>
                                <a href="#"><img src="/build/images/flicker/06.jpg" alt="A photo on Flickr" title="themetech-six"></a>
                                <a href="#"><img src="/build/images/flicker/07.jpg" alt="A photo on Flickr" title="themetech-seven"></a>
                                <a href="#"><img src="/build/images/flicker/08.jpg" alt="A photo on Flickr" title="themeteh-eight"></a>
                                <a href="#"><img src="/build/images/flicker/09.jpg" alt="A photo on Flickr" title="themetech-nine"></a>
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
                        <span>Copyright © 2019&nbsp;<a href="#">Boldman Infostack</a>. All rights reserved.</span>
                    </div>
                    <div class="col-md-4 ttm-footer2-right">
                        <div class="social-icons">
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-flickr" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
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
<script src="{{mix('revolution/js/slider.js','build')}}"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{mix('revolution/js/extensions/extensions-slider.js','build')}}"></script>



<script type="text/javascript">
    $(function(){
        $("#phone").mask("+(99) 999-999-999");
    });

    $(document).ready(function () {
        $('#ttm-contactform').on('submit', function (e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: '{{route('sendmail',app()->getLocale())}}',
                data: $('#ttm-contactform').serialize(),

                success: function (response) {
                    $('#throttle').hide('slow');
                    $('#flash-messages').show('slow');
                        document.getElementById('flash-messages').scrollIntoView({behavior:'smooth',block: 'center'});
                        $('div.text-success').html(response.success);

                    $('.text-danger').hide('slow');
                    document.getElementById('ttm-contactform').reset();
                },

                error: function (error) {

                    $('#throttle').hide('slow');

                    if(error.status === 429){
                        $('#throttle').show('slow');
                        document.getElementById('throttle').scrollIntoView({behavior:'smooth',block: 'center'});
                        $('div.text-warning').html(error.responseJSON.message);
                    }
                    else{
                        $('#flash-messages').hide('slow');
                        const errors = error.responseJSON.errors;
                        const firstItem = Object.keys(errors)[0]
                        const firstItemDOM = document.getElementById(firstItem)
                        const firstErrorMessage = errors[firstItem][0]

                        //scroll to the error message
                        firstItemDOM.scrollIntoView({behavior:'smooth',block: 'center'})

                        //remove all errors messages
                        const errorMessages = document.querySelectorAll('.text-danger')
                        errorMessages.forEach((element) => element.textContent = '')

                        //show is the error message
                        firstItemDOM.insertAdjacentHTML('afterend',`<div class = "text-danger">${firstErrorMessage}</div>`)
                    }

                    $('.text-success').hide('slow');
                }

            })

            setTimeout(function () {
                $('#flash-messages').hide('slow');
                $('.text-danger').hide('slow');
                //
            },5000);
        })
    })
</script>
</body>

<!-- Mirrored from themetechmount.com/html/boldman/header-infostack.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Dec 2019 12:54:26 GMT -->
</html>