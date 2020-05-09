<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    {{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>503</title>

    <link rel="stylesheet" type="text/css" href="{{mix('css/layout.css','build')}}"/>


    <!-- REVOLUTION LAYERS STYLES -->

    <link rel="stylesheet" type="text/css" href="{{mix('revolution/css/slider.css','build')}}"/>

</head>

<body>

<body>

<!--page start-->
<div class="page">

    <!--header start-->
    <header id="masthead" class="header ttm-header-style-classic">
        <!-- ttm-topbar-wrapper -->
        <div class="ttm-topbar-wrapper ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">

        </div><!-- ttm-topbar-wrapper end -->
        <!-- ttm-header-wrap -->
        <div class="ttm-header-wrap">
            <!-- ttm-stickable-header-w -->

        </div><!--ttm-header-wrap end -->
    </header><!--header end-->

    <!--error-404 start-->
    <section class="error-404 bg-img3">
        <div class="ttm-big-icon ttm-textcolor-skincolor">
            <i class="fa fa-gears"></i>
        </div>
        <header class="page-header"><h1 class="page-title">503 ERROR</h1></header>
        <div class="page-content"> <p>Service Temporarily Unavailable.</p></div>

    </section>
    <!--error-404 end-->

    <!--footer start-->
    <footer class="footer widget-footer clearfix">

    </footer>
    <!--footer end-->


</div><!-- page end -->



</body>

<script src="{{mix('js/layout.js','build')}}"></script>
