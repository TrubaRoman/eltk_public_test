<?php

namespace App\Providers;
use App\Http\ViewComposers\CounterComposer;
use App\Models\Menu;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\ViewComposers\NavigationComposer;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['layouts._script_nav','layouts._footer_nav'], NavigationComposer::class);
        view()->composer(['layouts._counters'], CounterComposer::class);
    }
}
