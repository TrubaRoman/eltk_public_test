<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
class ServicesController extends Controller


{

    public function index()
    {
        $locale = app()->getLocale();
        $services = Services::withLocalization($locale)->where('status',1)->orderBy('sort')->get();

        return  view('services.index',compact('services'));
    }

    public function show($locale = null,$slug)
    {   $locale = app()->getLocale();

        $services = Services::withLocalization($locale)->where('status',Services::IS_ACTIVE)->orderBy('sort')->get();
        $service_item  = $services->where('slug',$slug)->first();
        return view('services.show',['service_item' => $service_item, 'services' => $services]);
    }
}
