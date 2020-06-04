<div class="widget widget_nav_menu clearfix">
    <h3 class="widget-title">{{__('/layouts/footer.menu')}}</h3>
    <ul id="menu-footer-services">

        @foreach($menufooter as $item)
                    @if(!$item->children)
                    <li ><a href="{{url(app()->getLocale(),$item->url)}}">{{$item->name}}</a></li>
                    @endif
        @endforeach
    </ul>
</div>