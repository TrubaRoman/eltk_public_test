<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index()
    {
        $price = Price::getPrice();
        SEOMeta::setTitle($price->meta_title);
        SEOMeta::setDescription($price->meta_descriptions);

        return view('price.index',compact('price'));
    }

}
