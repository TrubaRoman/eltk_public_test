<?php
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
use DaveJamesMiller\Breadcrumbs\BreadcrumbsGenerator;
// Home
    Breadcrumbs::for('home', function ($trail) {
        $trail->push('Home', route('home',app()->getLocale()));
    });

// Home > About
    Breadcrumbs::for('portfolios', function ($trail,$item) {
        $trail->parent('home');
        $trail->push($item->name, route($item->url,app()->getLocale()));
    });

// Home > Blog
    Breadcrumbs::for('contacts', function ($trail,$item) {
        $trail->parent('home');
        $trail->push($item->name,route($item->url,app()->getLocale()));
    });

// Home > Blog > [Category]
    Breadcrumbs::for('price', function ($trail, $item) {
        $trail->parent('home');
        $trail->push($item->name, route($item->url,app()->getLocale()));
    });

// Home > Blog > [Category] > [Post]
    Breadcrumbs::for('offers', function ($trail, $item) {
        $trail->parent('home');
        $trail->push($item->name,  route($item->url,app()->getLocale()));
    });

