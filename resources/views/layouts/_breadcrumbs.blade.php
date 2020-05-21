
<!-- page-title -->
@if(isset($breadcrumbs) && count($breadcrumbs))
<div class="ttm-page-title-row">
    <div class="ttm-page-title-row-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-box ttm-textcolor-white">

                    <div class="breadcrumb-wrapper">
                        @foreach($breadcrumbs as $breadcrumb)
                        @if ($breadcrumb->url && !$loop->last)
                                <span>
                                    <a title="Homepage" href="{{$breadcrumb->url,app()->getLocale()}}">{{$breadcrumb->title}}</a>
                                </span>
                        <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                        @else
                        <span><span>{{$breadcrumb->title}}</span></span>
                    </div>
{{--                    <div class="page-title-heading">--}}
{{--                        <h1 class="title">{{$breadcrumb->title}}</h1>--}}
{{--                    </div><!-- /.page-title-captions -->--}}
                        @endif
                    @endforeach
                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- page-title end-->
    @endif