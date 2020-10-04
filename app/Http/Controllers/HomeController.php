<?php


    namespace App\Http\Controllers;

    use Jenssegers\Agent\Agent;
    use App\Models\Abouts;
    use App\Models\Services;
    use Artesaos\SEOTools\Facades\SEOMeta;

    class HomeController extends Controller
    {

        /**
         * Show the application home page.
         *
         * @return \Illuminate\Contracts\Support\Renderable
         */
        public function index()
        {   $agent = new Agent();


            SEOMeta::setTitle('HOME EL-TK');
            $locale = app()->getLocale();
            $services = Services::withLocalization($locale)->where('status',1)->orderBy('sort')->get();
            $abouts = Abouts::withLocalization($locale)->where('status',1)->orderBy('sort')->get();
            $abouts_block = $abouts->where('type_content','block');
            $abouts_main = $abouts->where('type_content','main');


            return view('home.index',[
                'services' => $services,
                'abouts_main' => $abouts_main,
                'abouts_block' => $abouts_block,
                'agent' => $agent
            ]);
        }
    }