<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
use DaveJamesMiller\Breadcrumbs\BreadcrumbsGenerator;

    Breadcrumbs::for('home', function ($trail) {
        $trail->push(__('content/pages.home.title'), route('home',app()->getLocale()));
    });

// Home > About
    Breadcrumbs::for('portfolios', function ($trail) {
        $trail->parent('home');
        $trail->push(__('content/pages.portfolio.title'), route('portfolios',app()->getLocale()));
    });

// Home > Blog
    Breadcrumbs::for('contacts', function ($trail,$item) {
        $trail->parent('home');
        $trail->push($item->name,route($item->url,app()->getLocale()));
    });



// Home > Blog > [Category] > [Post]
    Breadcrumbs::for('offers', function ($trail, $item) {
        $trail->parent('home');
        $trail->push($item->name,  route($item->url,app()->getLocale()));
    });
    // Home > Blog > [Category] > [Post]
    Breadcrumbs::for('services.show', function ($trail, $model) {

        $trail->parent('home');
        $trail->push($model->localization->title,  route('services.show',[app()->getLocale(),$model->slug]));
    });
    Breadcrumbs::for('portfolios.show', function ($trail, $model) {

        $trail->parent('portfolios');
        $trail->push($model->localization->title,  route('portfolios.show',[app()->getLocale(),$model->slug]));
    });
    //errors 404
    Breadcrumbs::for('errors.404', function ($trail) {
        $trail->parent('home');
        $trail->push('Page Not Found');
    });
    //errors 503
    Breadcrumbs::for('errors.503', function ($trail) {
        $trail->parent('home');
        $trail->push('Service Temporarily Unavailable');
    });
