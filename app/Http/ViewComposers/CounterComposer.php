<?php


    namespace App\Http\ViewComposers;


    use Illuminate\View\View;
    use App\Models\Counter;

    class CounterComposer
    {
        public function compose(View $view)
        {
            $coutner = Counter::counterData();

            return $view->with(['counter'=>$coutner]);
        }

    }