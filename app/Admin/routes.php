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
    $router->resource('abouts-localizations', AboutLocalizationController::class);
    $router->resource('abouts', AboutController::class);


    $router->get('forms/settings', 'FormController@settings');



});
