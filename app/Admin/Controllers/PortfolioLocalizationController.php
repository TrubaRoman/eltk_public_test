<?php

namespace App\Admin\Controllers;

use App\Models\PortfolioLocalization;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PortfolioLocalizationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\PortfolioLocalization';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new PortfolioLocalization());

        $grid->column('id', __('Id'));
        $grid->column('portfolio_id', __('Portfolio id'))->sortable();
        $grid->column('lang')->display(function ($lang) {
            return "<img src='/build/img/flags/24/{$lang}.png'> &nbsp;$lang</img>";
        })->sortable();
        $grid->column('title', __('Title'));
        $grid->column('short_content', __('Short content'));
        $grid->column('content', __('Content'))->limit(200);

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
        $show = new Show(PortfolioLocalization::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('portfolio_id', __('Portfolio id'));
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
        $form = new Form(new PortfolioLocalization());

        $form->number('portfolio_id', __('Portfolio id'))->default(request()->portfolio_id);
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
