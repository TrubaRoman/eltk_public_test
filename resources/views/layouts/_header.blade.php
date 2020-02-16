<!--header start-->
<header id="masthead" class="header ttm-header-style-infostack">
    <!-- ttm-topbar-wrapper -->
    <div class="ttm-topbar-wrapper ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
        <div class="container">
            <div class="ttm-topbar-content">
                <ul class="top-contact text-left">
                    <li class="list-inline-item">{{__('/layouts/header.top-header.left-slogan')}}</li>
                </ul>
                <div class="topbar-right text-right">
                    <div class="ttm-social-links-wrapper list-inline">
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-flickr"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>

                        </ul>
                    </div>
                    <ul class="top-contact ttm-highlight-right">

                        <li><strong><i class="fa fa-phone"></i>{{__('/layouts/header.top-header.right-slogan')}} :</strong> <span class="tel-no">0 (143) 456 7897</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- ttm-topbar-wrapper end -->

    <!-- ttm-header-wrap -->
    <div class="ttm-header-wrap">
        <div class="container">
            <div class="ttm-header-top-wrapper clearfix">
                <!-- site-branding -->
                <div class="site-branding">
                    <a class="home-link" href="index.html" title="Boldman" rel="home">
                        <img id="logo-img" class="img-center" src="/build/images/logo-img.png" alt="logo-img">
                    </a>
                </div><!-- site-branding end -->
                <!-- ttm-top-info-con-->
                <div class="ttm-top-info-con clearfix">
                    <ul>
                        <li>
                            <div class="icon-box icon-style-border">
                                <i class="ti ti-mobile"></i>
                            </div>
                            <div class="title-box">
                                <h5>{{__('/layouts/header.top-header.call')}}</h5>
                                <p>+123 456 7890</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon-box icon-style-border">
                                <i class="ti ti-comment-alt"></i>
                            </div>
                            <div class="title-box">
                                <h5>{{__('/layouts/header.top-header.email')}}</h5>
                                <p>info@example.com</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon-box icon-style-border">
                                <i class="ti ti-location-pin"></i>
                            </div>
                            <div class="title-box">
                                <h5>{{__('/layouts/header.top-header.address')}}</h5>
                                <p>24 Fifth st, Los Angeles, USA</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- ttm-top-info-con end -->
            </div>
            <!-- ttm-stickable-header-w -->
            <div id="ttm-stickable-header-w" class="ttm-stickable-header-w clearfix">
                <div id="site-header-menu" class="site-header-menu">
                    <div class="site-header-menu-inner ttm-stickable-header">
                        <div class="container">
                            <!--site-navigation -->
                            <div id="site-navigation" class="site-navigation">
                                <div class="ttm-menu-toggle">
                                    <input type="checkbox" id="menu-toggle-form" />
                                    <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                        <span class="toggle-block toggle-blocks-1"></span>
                                        <span class="toggle-block toggle-blocks-2"></span>
                                        <span class="toggle-block toggle-blocks-3"></span>
                                    </label>
                                </div>
                                <nav id="menu" class="menu">
                                    <ul class="dropdown">
                                        <li class="active"><a href="{{route('home',app()->getLocale())}}">Home</a>

                                        </li>
                                        <li><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="aboutus-1.html">About Us 1</a></li>
                                                <li><a href="aboutus-2.html">About Us 2</a></li>
                                                <li><a href="services-1.html">Service 1</a></li>
                                                <li><a href="services-2.html">Service 2</a></li>
                                                <li><a href="our-team.html">Our Team</a></li>
                                                <li><a href="#">Shop</a>
                                                    <ul>
                                                        <li><a href="home-shop.html">Home Shop</a></li>
                                                        <li><a href="product-details.html">Single Product Details</a></li>
                                                        <li><a href="cart.html">Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="faq.html">FAQs</a></li>
                                                <li><a href="career.html">Carrer</a></li>
                                                <li><a href="error.html">Error Page</a></li>
                                                <li><a href="element.html">Elements</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{route('services',app()->getLocale())}}">Services</a>
                                        </li>
                                        <li><a href="#">Projects</a>
                                            <ul>
                                                <li><a href="portfolio-style-1.html">Project Style 1</a></li>
                                                <li><a href="portfolio-style-2.html">Project Style 2</a></li>
                                                <li><a href="#">Project Single</a>
                                                    <ul>
                                                        <li><a href="single-style-1.html">Style One</a></li>
                                                        <li><a href="single-style-2.html">Style Two</a></li>
                                                        <li><a href="single-style-3.html">Style Three</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">Blog Classic</a></li>
                                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                                <li><a href="blog-left-image.html">Blog Left Image</a></li>
                                                <li><a href="single-blog.html">Single Blog View</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Contact Us</a>
                                            <ul>
                                                <li><a href="contact-us-1.html">Contact Us 1</a></li>
                                                <li><a href="contact-us-2.html">Contact Us 2</a></li>
                                            </ul>
                                        </li>


                                        <li><a href="#" ><img src="/build/img/flags/24/{{app()->getLocale()}}.png">	&#8195;{{strtoupper(app()->getLocale())}}</a>
                                            <ul>
                                                @foreach(config('app.locales') as $locale)
                                                <li><a  href="{{route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale)}}">
                                                        <img src="/build/img/flags/24/{{$locale}}.png" alt=""> 	&#8195;&#8195;{{strtoupper($locale)}} </a></li>
                                              @endforeach
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="ttm-rt-contact">
                  <!-- header-icins -->
                                        <div class="ttm-header-icons ">
                                     


                                            <div class="ttm-header-icon ttm-header-search-link">
                                                <a  href="#" id="alt-menu" ><i class="ti ti-more-alt"></i></a>
                                                <div class="ttm-search-overlay">
                                                    <div class="ttm-site-searchform">
                                                        <div class="w-search-form-h">
                                                            <div class="w-search-form-row">


                                                            	        <!-- ????                -->
										                            <ul>
										                                <li>                         
										                                       <a href="tel:+48609862467"  class= "link-defoult" >
										                                       		<p ><i class="fa fa-phone"></i> +48 609 862 467</p> 
										                                       </a>                                     
										                                </li>
										                              
										                                <li>                         
										                                       <a href="mailto:eltk.koczurek@op.pl"  class= "link-defoult" >
										                                       		<p ><i class="fa fa-at"></i> eltk.koczurek@op.pl</p> 
										                                       </a>                                     
										                                </li> 


										                            </ul>
                        
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div><!-- header-icons end -->


                                <div class="ttm-custombutton">
                                    <a href="contact-us.html">{{__('/layouts/header.nav.employee-cabinet')}}<i class="fa fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--ttm-header-wrap end -->

</header>
<!--header end-->
