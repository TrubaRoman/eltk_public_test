<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    Route::get('/', function () {
        return redirect(app()->getLocale());
    });

    Route::group([
        'prefix' => '{locale}',
        'where' => ['locale' => '[a-zA-Z]{2}'],
        'middleware' => 'setlocale'], function(){

            Route::get('/', function () {
                return view('welcome');
            });

            Auth::routes();

            Route::get('/', 'HomeController@index')->name('home');
            Route::get('/cabinet', 'CabinetController@index')->name('cabinet');
            Route::get('/services','ServicesController@index')->name('services');
            Route::get('/services/{slug?}','ServicesController@show')->name('services.show');
            Route::get('/price','PriceController@index')->name('price');
            Route::get('/about','AboutsController@index')->name('about-us');
            Route::get('/portfolios','PortfolioController@index')->name('portfolios');
            Route::get('/portfolio/{slug?}','PortfolioController@show')->name('portfolio.show');
            Route::get('/contacts','ContactsController@index')->name('contacts');
            Route::post('/sendmail','ContactsController@sendmail')->name('sendmail');
            Route::get('/offers','JobofferController@index')->name('offers');
            Route::post('/send-offers','JobofferController@send')->name('send-offers');
    });
