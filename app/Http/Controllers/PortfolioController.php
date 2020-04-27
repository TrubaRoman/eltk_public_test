<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
            $portfolioModel = new Portfolio();
            $portfolios = $portfolioModel->portfolioList();
        return  view('portfolios.index',compact('portfolios'));
    }

    public function show($locale = null,$slug)
    {

        $portfolioModel = new Portfolio();
        $portfolio_item = $portfolioModel->portfolioItem($slug);
        $portfolios = $portfolioModel->portfolioNoCurrent($slug);

        return view('portfolios.show',[
            'portfolios' => $portfolios,
            'portfolio_item' => $portfolio_item
        ]);
    }
}
