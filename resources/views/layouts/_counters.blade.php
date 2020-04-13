{{--@isset($coutner)--}}
<div class="row ttm-fid-row-wrapper">
    @foreach($counter as $item)
    <div class="col-md-4 col-sm-4">
        <div class="ttm-fid inside ttm-fid-view-lefticon">
            <div class="ttm-fid-left">
                <div class="ttm-fid-icon-wrapper">
                    <i class="ti {{$item->icon}}"></i>
                </div>
                <h4 class="ttm-fid-inner">
                                                <span   data-appear-animation = "animateDigits"
                                                        data-from             = "0"
                                                        data-to               = "{{$item->int_count}}"
                                                        data-interval         = "{{$item->int_count / 3}}"
                                                        data-before           = ""
                                                        data-before-style     = "sup"
                                                        data-after            = ""
                                                        data-after-style      = "sub"
                                                >{{$item->int_count}}</span><span>+</span>
                </h4>
            </div>
            <div class="ttm-fid-contents">
                <h3 class="ttm-fid-title">{{$item->title}}</h3>
            </div>
        </div>
    </div>
@endforeach
</div>
{{--    @endisset--}}