<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use App\Models\Services;
class ServicesController extends Controller

{
    public function show($locale = null,$slug)
    {
        $locale = app()->getLocale();
        $services = Services::withLocalization($locale)->where('status',Services::IS_ACTIVE)->orderBy('sort')->get();
        $service_item  = $services->where('slug',$slug)->first();
        SEOMeta::setTitle($service_item->localization->meta_title);
        SEOMeta::setDescription($service_item->localization->meta_descriptions);
        return view('services.show',['service_item' => $service_item, 'services' => $services]);
    }
}
