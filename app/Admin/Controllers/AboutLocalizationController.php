<?php

namespace App\Admin\Controllers;

use App\Models\AboutsLocalization;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AboutLocalizationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\AboutsLocalization';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new AboutsLocalization());
        $grid->column('id', __('Id'));
        $grid->column('abouts_id', __('Abouts id'));
        $grid->column('lang')->display(function ($title) {

            return "<img src='/build/img/flags/24/{$title}.png'> &nbsp;$title</img>";

        });
        $grid->column('title', __('Title'));
        $grid->column('title_two', __('Title two'));
        $grid->column('content', __('Content'));
        $grid->column('content_two', __('Content two'));

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
        $show = new Show(AboutsLocalization::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('abouts_id', __('Abouts id'));
        $show->field('lang', __('Lang'));
        $show->field('title', __('Title'));
        $show->field('title_two', __('Title two'));
        $show->field('content', __('Content'));
        $show->field('content_two', __('Content two'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new AboutsLocalization());

        $form->number('abouts_id', __('Abouts id'));
        $form->select('lang', __('Lang'))->options(function ()
        {
            $arr = [];
            foreach(config('app.locales')  as  $value){
                $arr[$value] = $value;
            }
            return $arr;

        })->default(app()->getLocale());
        $form->text('title', __('Title'));
        $form->text('title_two', __('Title two'));
        $form->ckeditor('content', __('Content'));
        $form->ckeditor('content_two', __('Content two'));

        return $form;
    }
}
