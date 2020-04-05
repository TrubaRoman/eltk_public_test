<?php

namespace App\Admin\Controllers;

use App\Models\Contacts;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ContactsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\Contacts';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Contacts());
 ;
        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        $grid->column('phone', __('Phone'));
        $grid->column('subject', __('Subject'));
        $grid->column('lang', __('Lang'));
        $grid->column('body', __('Body'));
        $grid->column('ip', __('Ip'));
        $grid->column('is_read', __('Is read'))->switch();
        $grid->column('is_answer', __('Is answer'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));


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

        Contacts::setReadMessage($id);
        $show = new Show(Contacts::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('phone', __('Phone'));
        $show->field('subject', __('Subject'));
        $show->field('lang', __('Lang'));
        $show->field('body', __('Body'));
        $show->field('ip', __('Ip'));
        $show->field('is_read', __('Is read'));
        $show->field('is_answer', __('Is answer'));
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
        $form = new Form(new Contacts());

        $form->text('name', __('Name'));
        $form->email('email', __('Email'));
        $form->mobile('phone', __('Phone'));
        $form->text('subject', __('Subject'));
        $form->text('lang', __('Lang'));
        $form->textarea('body', __('Body'))->rows(10);
        $form->ip('ip', __('Ip'));
        $form->switch('is_read', __('Is read'));
        $form->switch('is_answer', __('Is answer'));

        return $form;
    }
}
