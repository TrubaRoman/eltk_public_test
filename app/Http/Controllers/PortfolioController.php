<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
            $portfolioModel = new Portfolio();
            $portfolios = $portfolioModel->portfolioList();
        if (! $portfolios->count() > 0)
        {
            abort(404);
        }
        return  view('portfolios.index',compact('portfolios'));
    }

    public function show($locale = null,$slug)
    {

        $portfolioModel = new Portfolio();
        $portfolio_item = $portfolioModel->portfolioItem($slug);
        SEOMeta::setTitle($portfolio_item->localization->meta_title);
        SEOMeta::setDescription($portfolio_item->localization->meta_descriptions);
        $portfolios_no_current = $portfolioModel->portfolioNoCurrent($slug);


        return view('portfolios.show',[
            'portfolios_no_current' => $portfolios_no_current,
            'portfolio_item' => $portfolio_item
        ]);
    }
}
