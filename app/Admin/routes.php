<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->resource('users', UserController::class);
    $router->resource('services', ServicesController::class);
    $router->resource('services-localizations', ServicesLocalizationController::class);
    $router->resource('prices', PriceController::class);
    $router->resource('menus', MenuController::class);
    $router->resource('contacts', ContactsController::class);
    $router->resource('answers', AnswersController::class);
    $router->resource('abouts-localizations', AboutsLocalizationController::class);
    $router->resource('abouts', AboutsController::class);
    $router->resource('counters', CounterController::class);
    $router->resource('portfolios', PortfolioController::class);
    $router->resource('portfolio-localizations', PortfolioLocalizationController::class);
    $router->resource('joboffers', JobofferController::class);
    $router->resource('cvs', Cvcontroller::class);




    $router->get('forms/settings', 'FormController@settings');



});
