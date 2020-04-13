<?php

namespace App\Http\Controllers;

use App\Models\Abouts;
use Illuminate\Http\Request;

class AboutsController extends Controller
{

    public function index()
    {
        $locale = app()->getLocale();
        $abouts = Abouts::withLocalization($locale)->where('status',1)->orderBy('sort')->first();

        return  view('abouts.index',compact('abouts'));
    }
}
