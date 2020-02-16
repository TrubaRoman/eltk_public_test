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
}
