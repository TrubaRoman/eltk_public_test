<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use \App\Models\Counter;

class CounterController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '\App\Models\Counter';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Counter());

        $grid->column('id', __('Id'));
        $grid->column('title_pl', __('Title pl'));
        $grid->column('title_uk', __('Title uk'));
        $grid->column('title_en', __('Title en'));
        $grid->column('icon', __('Icon'));
        $grid->column('int_count', __('Int count'));
        $grid->column('sort', __('Sort'));
        $grid->column('status', __('Status'))->bool();


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
        $show = new Show(Counter::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title_pl', __('Title pl'));
        $show->field('title_uk', __('Title uk'));
        $show->field('title_en', __('Title en'));
        $show->field('icon', __('Icon'));
        $show->field('int_count', __('Int count'));
        $show->field('sort', __('Sort'));
        $show->field('status', __('Status'));
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
        $form = new Form(new Counter());

        $form->text('title_pl', __('Tytuł pl'));
        $form->text('title_uk', __('Tytuł uk'));
        $form->text('title_en', __('Tytuł en'));
        $form->text('icon', __('Icon'))->help('Przykładowe ikony są tutaj :  https://themify.me/themify-icons ');
        $form->number('int_count', __('Int count'));
        $form->number('sort', __('Sort'));
        $form->switch('status', __('Status'));

        return $form;
    }
}
