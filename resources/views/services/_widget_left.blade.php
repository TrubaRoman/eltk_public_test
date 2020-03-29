<div class="col-lg-3 widget-area sidebar-left ttm-col-bgcolor-yes ttm-bg ttm-left-span ttm-bgcolor-grey">
    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
    <aside class="widget widget-nav-menu">
        <ul class="widget-menu">
            @foreach($services as $item)
            <li><a href="{{route('services.show',[app()->getLocale(),$item->slug])}}"> {{$item->localization->title}} </a></li>
{{--            <li><a href="painting-services.html"> Painting Services </a></li>--}}
{{--            <li class="active"><a href="renovation-and-painting.html"> Renovation and Painting </a></li>--}}
{{--            <li><a href="air-conditioner.html"> Air Conditioner </a></li>--}}
{{--            <li><a href="wiring-and-installation.html"> Wiring and installation </a></li>--}}
{{--            <li><a href="plumber-services.html"> Plumber Services </a></li>--}}
                @endforeach
        </ul>
    </aside>
    <aside class="widget contact-widget">
        <h3 class="widget-title">Get in touch</h3>
        <ul class="contact-widget-wrapper">
            <li><i class="fa fa-map-marker"></i>1212 Paint Valley Road East Rutherford, New York 06192, USA</li>
            <li><i class="fa fa-envelope-o"></i><a href="mailto:info@example.com" target="_blank">info@example.com</a></li>
            <li><i class="fa fa-phone"></i>(+01) 123 456 7890</li>
            <li><i class="ti ti-alarm-clock"></i>Mon - Sat 8.00 - 18.00. Sunday CLOSED</li>
        </ul>
    </aside>
    <aside class="widget widget_media_image">
        <a href="#"><img class="img-fluid" src="images/widget-banner.jpg" alt="widget-banner"></a>
    </aside>
    <aside class="widget tagcloud-widget">
        <h3 class="widget-title">Tags</h3>
        <div class="tagcloud">
            <a href="#" class="tag-cloud-link">Design</a>
            <a href="#" class="tag-cloud-link">Dry Wall</a>
            <a href="#" class="tag-cloud-link">Electrical</a>
            <a href="#" class="tag-cloud-link">Furniture</a>
            <a href="#" class="tag-cloud-link">Handywork</a>
            <a href="#" class="tag-cloud-link">Painting</a>
            <a href="#" class="tag-cloud-link">Pools</a>
            <a href="#" class="tag-cloud-link">Roofing</a>
        </div>
    </aside>
</div>