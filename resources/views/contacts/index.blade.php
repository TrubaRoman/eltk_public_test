@extends('layouts.main')

@section('content')
    @include('layouts._breadcrumbs')
    <div class="site-main">

        <!-- contact-form-section -->
        <section class="ttm-row contact-form-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 pr-60 res-767-pr-15">
                        <!-- section title -->
                        <div class="section-title with-desc clearfix">
                            <div class="title-header">
                                <h5>GET IN TOUCH</h5>
                                <h2 class="title">Contact Form</h2>
                            </div>
                            <div class="title-desc">We are a team of professional and skilled experts in all domestic spheres. We offer a wide range of seryou with any unconventional.</div>
                        </div><!-- section title end -->
                        <div class="text-success h6"  id="flash-messages"></div>
                        <div class="text-warning "  id="throttle"></div>
                        <form id="ttm-contactform"  class="ttm-contactform wrap-form clearfix"   >
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>
                                        <span class="text-input"><i class="ttm-textcolor-skincolor ti-user"></i><input name="name" type="text" value="{{old('name')}}" placeholder="{{__('validation.attributes.name')}}" id="name"></span>
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label>
                                        <span class="text-input "><i class="ttm-textcolor-skincolor ti-mobile"></i><input name="phone" type="text" value="{{old('phone')}}" placeholder="{{__('validation.attributes.phone')}}" id="phone"  ></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>
                                        <span class="text-input"><i class="ttm-textcolor-skincolor ti-email"></i><input name="email" type="text" value="{{old('email')}}" placeholder="{{__('validation.attributes.email')}}" id="email"  ></span>
                                    </label>
                                </div>

{{--                                <div class="col-lg-6">--}}
{{--                                    <label>--}}
{{--                                        <span class="text-input"><i class="ttm-textcolor-skincolor ti-location-pin"></i><input name="venue" type="text" value="" placeholder="Venue" ></span>--}}
{{--                                    </label>--}}
{{--                                </div>--}}

                            </div>
                            <label>
                                <span class="text-input"><i class="ttm-textcolor-skincolor ti-comment"></i><textarea name="message" rows="3" cols="40" placeholder="{{__('validation.attributes.message')}}" id="message"></textarea></span>
                            </label>
                            <input name="submit" type="submit" id="submit" class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mb-20" value="MAKE A RESERVATION">
                        </form>
                    </div>

                    <div class="col-md-5">
                        <!-- single-img -->
                        <div class="single-img">
                            <img class="img-fluid" src="/build/images/test.jpg" alt="">
                        </div><!-- single-img end -->
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!-- contact-form-section end -->
        <hr>
        <!-- map-section -->
        <div class="ttm-row map-section bg-layer clearfix">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2563.7371101624863!2d19.984145315113846!3d50.01628242643495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47164367f3dc2173%3A0x4ee479f6f6467e!2zT2vDs2xuYSAyOCwgS3Jha8Ozdw!5e0!3m2!1suk!2spl!4v1583614458825!5m2!1suk!2spl" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>


                    </div>
                    <div class="col-lg-4">
                        <div class="ttm-bg ttm-col-bgcolor-yes ttm-right-span ttm-bgcolor-grey">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content">
                                <div class="pt-40 pr-140 pb-55 pl-60 box-shadow2 res-991-plr-15 clearfix">
                                    <h4>Contact Details</h4>
                                    <ul class="ttm_contact_widget_wrapper">
                                        <li><i class="ttm-textcolor-skincolor ti ti-location-pin"></i>1212 Paint Valley Road East Rutherford, New<br>York 06192, USA</li>
                                        <li><i class="ttm-textcolor-skincolor ti ti-mobile"></i>(+01) 123 456 7890<br>(+01) 987 456 1234</li>
                                        <li><i class="ttm-textcolor-skincolor ti ti-comment"></i><a href="mailto:info@boldman.com">info@boldman.com</a></li>
                                        <li><i class="ttm-textcolor-skincolor ti ti-world"></i><a href="http://www.example.com/">http://www.example.com</a></li>
                                    </ul>
                                    <div class="social-icons circle social-hover mb-35">
                                        <ul class="list-inline">
                                            <li class="social-facebook"><a class="tooltip-top ttm-textcolor-skincolor" target="_blank" href="#" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li class="social-twitter"><a class="tooltip-top ttm-textcolor-skincolor" target="_blank" href="#" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li class="social-gplus"><a class=" tooltip-top ttm-textcolor-skincolor" target="_blank" href="#" data-tooltip="Google+"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                            <li class="social-linkedin"><a class=" tooltip-top ttm-textcolor-skincolor" target="_blank" href="#" data-tooltip="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- map-section -->

    </div>
    @endsection
{{--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2563.7371101624863!2d19.984145315113846!3d50.01628242643495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47164367f3dc2173%3A0x4ee479f6f6467e!2zT2vDs2xuYSAyOCwgS3Jha8Ozdw!5e0!3m2!1suk!2spl!4v1583614458825!5m2!1suk!2spl" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>--}}
