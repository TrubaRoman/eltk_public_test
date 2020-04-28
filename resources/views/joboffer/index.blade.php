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

                                <h3 class="title">Podaj CV</h3>
                            </div>
                            <div class="title-desc"><h6>Zatrudnimy doświadczonych elektromonterów z uprawnieniami. Zainteresowanych prosimy o przesyłanie CV.</h6></div>
                            <div class="title-desc"><small>Pole <i class="fa fa-asterisk" style="color:#EE5651; font-size:8px; vertical-align:top;"></i>  jest wymagane </small></div>
                        </div><!-- section title end -->
                        <div class="text-success h6"  id="flash-messages"></div>
                        <div class="text-warning "  id="throttle"></div>
                        <form  id="ttm-job-offers" method = "POST" class="ttm-contactform wrap-form clearfix" >
                            @method('post');
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="name">
                                        <i class="ttm-textcolor-skincolor ti-user"></i> <b>	&nbsp;Imie</b><i class="fa fa-asterisk" style="color:#EE5651; font-size:8px; vertical-align:top;"></i>
                                        <span class="text-input"><input name="name" type="text" value="{{old('name')}}"id="name"></span>
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                    <label for="surname">
                                        <i class="ttm-textcolor-skincolor ti-user"></i> <b>	&nbsp;Nazwisko</b><i class="fa fa-asterisk" style="color:#EE5651; font-size:8px; vertical-align:top;"></i>
                                        <span class="text-input"><input name="surname" type="text" value="{{old('surname')}}" id="surname"></span>
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                    <label for="phone">
                                        <i class="ttm-textcolor-skincolor ti-mobile"></i><b>	&nbsp;Kontakt telefoniczny </b><i class="fa fa-asterisk" style="color:#EE5651; font-size:8px; vertical-align:top;"></i>
                                        <span class="text-input "><input name="phone" type="text" value="{{old('phone')}}"  id="phone"  ></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for = "email">
                                        <i class="ttm-textcolor-skincolor ti-email"></i><b>	&nbsp;Email</b>
                                        <span class="text-input"><input name="email" type="text" value="{{old('email')}}"  id="email"  ></span>
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label for="offer"><i class="ttm-textcolor-skincolor ti-hummer"></i>  <b>&nbsp;Aplikacja na stanowisko</b><i class="fa fa-asterisk" style="color:#EE5651; font-size:8px; vertical-align:top;"></i>
                                        <span class="text-input"><select
                                                    name="offer" id="offer" >
                                                <option value="">wybierz</option>
                                                @foreach($offers as $offer)
                                                <option >{{$offer->title}}</option>
                                                @endforeach
                                            </select></span>
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label for="driving_license"><i class="ttm-textcolor-skincolor ti-car"></i>  <b>&nbsp;Prawo jazdy</b><i class="fa fa-asterisk" style="color:#EE5651; font-size:8px; vertical-align:top;"></i>
                                        <span class="text-input">
                                            <select
                                                    name="driving_license" id="driving_license" >
                                                <option selected value="">wybierz</option>
                                                <option value="1">tak</option>
                                                <option value="0">nie</option>

                                            </select>
                                        </span>
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label for="sep"><i class="ttm-textcolor-skincolor ti-bolt-alt"></i> <b> &nbsp;Uprawnienia SEP lub równoważne</b><i class="fa fa-asterisk" style="color:#EE5651; font-size:8px; vertical-align:top;"></i>
                                        <span class="text-input">
                                            <select name="sep" id="sep" >
                                                <option selected value="">wybierz</option>
                                                <option value="1">tak</option>
                                                <option value="0">nie</option>

                                            </select>
                                        </span>
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label for="udt"><i class="ttm-textcolor-skincolor ti-settings"></i> <b> &nbsp;Uprawnienia UDT</b><i class="fa fa-asterisk" style="color:#EE5651; font-size:8px; vertical-align:top;"></i>
                                        <span class="text-input">
                                            <select name="udt" id="udt" >
                                                <option selected value="">wybierz</option>
                                                <option value="1" >tak</option>
                                                <option value="0">nie</option>
                                            </select>
                                        </span>
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                    <label for="experience"><i class="ttm-textcolor-skincolor ti-medall-alt"></i><b>&nbsp; Doświadczenie w zawodzie (lata) </b><i class="fa fa-asterisk" style="color:#EE5651; font-size:8px; vertical-align:top;"></i>
                                        <span class="text-input"><input name="experience" type="text" value=""  id="experience"  ></span>
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                    <label for="cv">
                                        <i class="ttm-textcolor-skincolor ti-upload"></i> <b>&nbsp; Załącz CV (rozmiar pliku maks. 500kB)</b>
                                        <span class="text-input"><input name="cv" type="file" value=""  id="cv"  ></span>
                                    </label>
                                </div>

                            </div>
                            <label for="message"><i class="ttm-textcolor-skincolor ti-comment"></i><b>&nbsp; Dodatkowy opis</b>
                                <span class="text-input"><textarea name="message" rows="3" cols="40" placeholder="" id="message"></textarea></span>
                            </label>
                            <input name="submit" type="submit" id="submit" class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mb-20" value="send" >
                        </form>
                    </div>

                    <div class="col-md-5">
                        <!-- single-img -->
                        <div class="section-title clearfix">
                            <div class="title-header">

                                <h3 >Jobs offers</h3>
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
                </div><!-- row end -->
            </div>
        </section>
        <!-- contact-form-section end -->
        <hr>


    </div>
@endsection
