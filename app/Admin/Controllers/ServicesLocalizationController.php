<?php

namespace App\Admin\Controllers;

use App\Models\Services;
use App\Models\ServicesLocalization;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ServicesLocalizationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\ServicesLocalization';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ServicesLocalization());
        $grid->enableHotKeys();
        $grid->column('id', __('Id'));
        $grid->column('menu', __('Menu'));
        $grid->column('services_id', __('Services id'))->sortable();
        $grid->column('lang')->display(function ($lang) {

            return "<img src='/build/img/flags/24/{$lang}.png'> &nbsp;$lang</img>";

        })->sortable();
        $grid->column('title', __('Title'))->sortable();
        $grid->column('short_content', __('Short content'))->sortable();
        $grid->column('content', __('Content'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(ServicesLocalization::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('menu', __('Menu'));
        $show->field('services_id', __('Services id'));
        $show->field('lang', __('Lang'));
        $show->field('title', __('Title'));
        $show->field('short_content', __('Short content'));
        $show->field('content', __('Content'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ServicesLocalization());
        $form->text('menu', __('Menu'));
        $form->text('services_id', __('Services id'));
        $form->select('lang', __('Lang'))->options(function ()
        {
            $arr = [];
            foreach(config('app.locales')  as  $value){
                $arr[$value] = $value;
            }
            return $arr;

        })->default(app()->getLocale());
        $form->text('title', __('Title'));
        $form->text('short_content', __('Short content'));
        $form->ckeditor('content', __('Content'));

        return $form;
    }
}
