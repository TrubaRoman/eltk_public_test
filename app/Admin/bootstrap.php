<?php

/**
 * Laravel-admin - admin builder based on Laravel.
 * @author z-song <https://github.com/z-song>
 *
 * Bootstraper for Admin.
 *
 * Here you can remove builtin form field:
 * Encore\Admin\Form::forget(['map', 'editor']);
 *
 * Or extend custom form field:
 * Encore\Admin\Form::extend('php', PHPEditor::class);
 *
 * Or require js and css assets:
 * Admin::css('/packages/prettydocs/css/styles.css');
 * Admin::js('/packages/prettydocs/js/main.js');
 *
 */

use Encore\Admin\Facades\Admin;
use App\Admin\Extensions\Nav;
use App\Admin\Actions;

Encore\Admin\Form::forget(['map', 'editor']);


    Admin::navbar(function (\Encore\Admin\Widgets\Navbar $navbar) {
        $navbar->right(Nav\Link::make('Settings', 'forms/settings'));
        $navbar->right(new Actions\ClearCache());
        $navbar->left(new Nav\Dropdown());
        $count = \App\Models\Contacts::getCountNewMessages();
        $navbar->right(view('admin.header._nav',['count' => $count]));

    });
