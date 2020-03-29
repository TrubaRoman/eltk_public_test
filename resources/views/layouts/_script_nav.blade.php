@if($menuitems)
@php

    function buildMenu($menuitems, $parent)
    {
        foreach ($menuitems  as $item)
            {
                 if (isset($item->children)) {
@endphp

<li><a href="{{$item->url}}">{{$item->name}}</a>
    <ul>
        @php buildMenu($item->children, 'subnav-'.$item->id) @endphp
    </ul>
</li>
@php
    }else{
@endphp
<li class="{{request()->routeIs($item->url)?'active':''}}" >
    <a href="{{ url(app()->getLocale(),$item->url) }}"  >{{ $item->name }}</a>
</li>
@php
    }
}
}
buildMenu($menuitems, 'mainMenu');
@endphp
    @endif