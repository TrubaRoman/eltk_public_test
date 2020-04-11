<?php

namespace App\Admin\Controllers;

use App\Models\Answers;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AnswersController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\Answers';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Answers());

        $grid->column('id', __('Id'));
        $grid->column('contacts_id', __('Contacts id'));
        $grid->column('email', __('Email'));
        $grid->column('name', __('Name'));
        $grid->column('subject', __('Subject'));
        $grid->column('body', __('Body'));
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
        $show = new Show(Answers::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('contacts_id', __('Contacts id'));
        $show->field('email', __('Email'));
        $show->field('name', __('Name'));
        $show->field('subject', __('Subject'));
        $show->field('body', __('Body'));
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
        $answers = new Answers();

       $form = new Form($answers);
       $form->display('contacts_id','Contacts ID');

       $form->text('name','name');
       $form->email('email','Email');
       $form->text('subject','Subject');
       $form->ckeditor('body','Text');
       return $form;
    }
}
