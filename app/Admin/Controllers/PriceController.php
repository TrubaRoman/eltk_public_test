<?php

namespace App\Admin\Controllers;

use App\Models\Price;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PriceController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\Price';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Price());

        $grid->column('id', __('Id'))->sortable();
        $grid->column('table', __('Table'))->display(function ($table){
            return  $table;
        });

        $grid->column('lang')->display(function ($lang) {

            return "<img src='/build/img/flags/24/{$lang}.png'> &nbsp;$lang</img>";

        })->sortable();
        $grid->column('created_at', __('Created at'))->sortable();
        $grid->column('updated_at', __('Updated at'))->sortable();

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
        $show = new Show(Price::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('table', __('Table'))->unescape();
        $show->field('lang', __('Lang'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Price());

        $form->select('lang', __('Lang'))->options(function ()
        {
            $arr = [];
            foreach(config('app.locales')  as  $value){
                $arr[$value] = $value;
            }
            return $arr;

        })->default(app()->getLocale());
        $form->ckeditor('table', __('Table'));

        return $form;
    }
}
