<div class="col-lg-3 order-lg-1  widget-area sidebar-left ttm-col-bgcolor-yes ttm-bg ttm-left-span ttm-bgcolor-grey">
    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>

    <aside class="widget widget-nav-menu d-none d-lg-block">
        <ul class="widget-menu">

            @foreach($services as $item)
            <li class="{{Route::current()->slug == $item->slug?'active':''}}"><a href="{{route('services.show',[app()->getLocale(),$item->slug])}}"> {{$item->localization->title}} </a></li>

                @endforeach
        </ul>
    </aside>
    @include('services._widget_left_contact_data')

</div>