@extends('layouts.main')
@section('content')
    @include('layouts._breadcrumbs')
    <div class="site-main">

        <!-- contact-form-section -->
        <section class="ttm-row contact-form-section clearfix">
            <div class="container">
                <div class="row">

                    @if(count($offers) > 0)
                    <div class="col-md-7 pr-60 res-767-pr-15">
                        <!-- section title -->
                        <div class="section-title with-desc clearfix">
                            <div class="title-header">

                                <h3 class="title">{{__('content/pages.offers.cv-title')}}</h3>
                            </div>
                            <div class="title-desc"><h6>{{__('content/pages.offers.cv-desc')}}</h6></div>
                            <div class="title-desc"><small>{{__('content/pages.offers.required-desc')}} <i class="fa fa-asterisk" style="color:#EE5651; font-size:8px; vertical-align:top;"></i> </small></div>
                        </div><!-- section title end -->
                        <div class="text-success h6"  id="flash-messages"></div>
                        <div class="text-warning "  id="throttle"></div>
                        <form  id="ttm-job-offers" method = "POST" class="ttm-contactform wrap-form clearfix" >
                            @method('POST')
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="name">
                                        <i class="ttm-textcolor-skincolor ti-user"></i> <b>	&nbsp;{{__('validation.attributes.name')}} </b><i class="fa fa-asterisk" style="color:#EE5651; font-size:8px; vertical-align:top;"></i>
                                        <span class="text-input"><input name="name" type="text" value="{{old('name')}}"id="name"></span>
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                    <label for="surname">
                                        <i class="ttm-textcolor-skincolor ti-user"></i> <b>	{{__('validation.attributes.surname')}}</b><i class="fa fa-asterisk" style="color:#EE5651; font-size:8px; vertical-align:top;"></i>
                                        <span class="text-input"><input name="surname" type="text" value="{{old('surname')}}" id="surname"></span>
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                    <label for="phone">
                                        <i class="ttm-textcolor-skincolor ti-mobile"></i><b>	{{__('validation.attributes.phone')}} </b><i class="fa fa-asterisk" style="color:#EE5651; font-size:8px; vertical-align:top;"></i>
                                        <span class="text-input "><input name="phone" type="text" value="{{old('phone')}}"  id="phone"  ></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for = "email">
                                        <i class="ttm-textcolor-skincolor ti-email"></i><b>	&nbsp;{{__('validation.attributes.email')}}</b>
                                        <span class="text-input"><input name="email" type="text" value="{{old('email')}}"  id="email"  ></span>
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label for="offer"><i class="ttm-textcolor-skincolor ti-hummer"></i>  <b>&nbsp;{{__('validation.attributes.offer')}}</b><i class="fa fa-asterisk" style="color:#EE5651; font-size:8px; vertical-align:top;"></i>
                                        <span class="text-input"><select
                                                    name="offer" id="offer" >
                                                <option value="">{{__('content/pages.form.select')}}</option>
                                                @foreach($offers as $offer)
                                                <option >{{$offer->title}}</option>
                                                @endforeach
                                                <option>{{__('content/pages.form.other')}}</option>

                                            </select></span>
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label for="driving_license"><i class="ttm-textcolor-skincolor ti-car"></i>  <b>&nbsp;{{__('validation.attributes.driving_license')}}</b><i class="fa fa-asterisk" style="color:#EE5651; font-size:8px; vertical-align:top;"></i>
                                        <span class="text-input">
                                            <select
                                                    name="driving_license" id="driving_license" >
                                                <option selected value="">{{__('content/pages.form.select')}}</option>
                                                <option value="1">{{__('content/pages.form.bool.true')}}</option>
                                                <option value="0">{{__('content/pages.form.bool.false')}}</option>

                                            </select>
                                        </span>
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label for="sep"><i class="ttm-textcolor-skincolor ti-bolt-alt"></i> <b> &nbsp;{{__('validation.attributes.sep')}}</b><i class="fa fa-asterisk" style="color:#EE5651; font-size:8px; vertical-align:top;"></i>
                                        <span class="text-input">
                                            <select name="sep" id="sep" >
                                                <option selected value="">{{__('content/pages.form.select')}}</option>
                                                <option value="1">{{__('content/pages.form.bool.true')}}</option>
                                                <option value="0">{{__('content/pages.form.bool.false')}}</option>

                                            </select>
                                        </span>
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label for="udt"><i class="ttm-textcolor-skincolor ti-settings"></i> <b> &nbsp;{{__('validation.attributes.udt')}}</b><i class="fa fa-asterisk" style="color:#EE5651; font-size:8px; vertical-align:top;"></i>
                                        <span class="text-input">
                                            <select name="udt" id="udt" >
                                                <option selected value="">{{__('content/pages.form.select')}}</option>
                                                <option value="1" >{{__('content/pages.form.bool.true')}}</option>
                                                <option value="0">{{__('content/pages.form.bool.false')}}</option>
                                            </select>
                                        </span>
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                    <label for="experience"><i class="ttm-textcolor-skincolor ti-medall-alt"></i><b>	&#8194;{{__('validation.attributes.experience')}} </b><i class="fa fa-asterisk" style="color:#EE5651; font-size:8px; vertical-align:top;"></i>
                                        <span class="text-input"><input name="experience" type="text" value=""  id="experience"  ></span>
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                    <label for="cv">
                                        <i class="ttm-textcolor-skincolor ti-upload"></i> <b>&nbsp; {{__('validation.attributes.cv')}} ({{__('content/pages.form.file-max-size-desc',['value' => '500'])}})</b>
                                        <span class="text-input"><input name="cv" type="file" value=""  id="cv"  ></span>
                                    </label>
                                </div>

                            </div>
                            <label for="description"><i class="ttm-textcolor-skincolor ti-comment"></i><b>	&#8194;{{__('validation.attributes.description')}}</b>
                                <span class="text-input"><textarea name="description" rows="3" cols="40" placeholder="" id="description"></textarea></span>
                            </label>
                            <input name="submit" type="submit" id="submit" class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mb-20" value="{{__('content/pages.buttons.send')}}" >
                        </form>
                    </div>

                    <div class="col-md-5">
                        <!-- single-img -->
                        <div class="section-title clearfix">
                            <div class="title-header">

                                <h3 >{{__('content/pages.offers.offers-title')}}</h3>
                            </div>
                        </div><!-- section title end -->
                        <!-- acadion -->
                        <div class="accordion mt-40">
@foreach($offers as $offer)

                            <!-- toggle -->
                            <div class="toggle ttm-style-classic ttm-toggle-title-bgcolor-grey">
                                <div class="toggle-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" >{{$offer->title}}</a></div>
                                <div class="toggle-content">
                                    <p>{!!$offer->description  !!}</p>
                                </div>
                            </div><!-- toggle end -->
                            <!-- toggle -->
    @endforeach
                        </div><!-- acadion end-->
                    </div>
                    @else
                        <div class="col-lg-12 h-200">
                            <div class="section-title clearfix ">
                                <div class="title-header">

                                    <h3  >{{__('content/pages.offers.no_vacancies')}}</h3>
                                    <p>{{__('content/pages.offers.no_vacancies_desc',['email' => config('settings.public_email'),'phone' => config('settings.public_phone')])}}</p>
                                </div>
                            </div><!-- section title end -->

                        </div>
                    @endif

                </div><!-- row end -->
            </div>
        </section>
        <!-- contact-form-section end -->
        <hr>


    </div>
@endsection
