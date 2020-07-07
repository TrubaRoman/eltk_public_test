<div class="col-lg-3 order-lg-1  widget-area sidebar-left ttm-col-bgcolor-yes ttm-bg ttm-left-span ttm-bgcolor-grey">
    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>

    <aside class="widget widget-nav-menu d-none d-lg-block">
        <ul class="widget-menu">

            @foreach($services as $item)
            <li class="{{Route::current()->slug == $item->slug?'active':''}}"><a href="{{route('services.show',[app()->getLocale(),$item->slug])}}"> {{$item->localization->title}} </a></li>

                @endforeach
        </ul>
    </aside>
    <aside class="widget contact-widget">
        <h3 class="widget-title">{{__('content/pages.widget_firm_info.title')}}</h3>
        <ul class="contact-widget-wrapper">
            <li><i class="fa fa-map-marker"></i>{{config('settings.public_address')}}</li>
            <li><i class="fa fa-envelope-o"></i><a href="mailto:{{config('settings.public_email')}}" target="_blank">{{config('settings.public_email')}}</a></li>
            <li><i class="fa fa-phone"></i>{{config('settings.public_phone')}}</li>
            <li><i class="ti ti-alarm-clock"></i>{{__('content/pages.widget_firm_info.hours_of_work',['open' =>config('settings.hours_work_open'),'closed' => config('settings.hours_work_closed')])}}</li>
        </ul>
    </aside>

</div>