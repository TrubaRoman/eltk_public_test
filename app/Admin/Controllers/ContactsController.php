<?php

namespace App\Admin\Controllers;

use App\Models\Contacts;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Grid\Displayers\Actions;
use Encore\Admin\Show;
use Illuminate\Support\Str;

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
        $grid->disableCreateButton();
        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        $grid->column('phone', __('Phone'));
        $grid->column('subject', __('Subject'))->hide();
        $grid->column('lang','')->display(function ($lang) {

            return "<img src='/build/img/flags/24/{$lang}.png'> &nbsp;$lang</img>";

        })->sortable()->help('Język zainstalowany na stronie nadawcy')->width(80);
        $grid->column('body', __('Treść wiadomości'))->limit(300)->help('Treść wiadomości od nadawcy');
        $grid->column('ip', __('Ip'));
        $states = [
            'on'  => ['value' => 1, 'text' => 'tak', 'color' => 'primary'],
            'off' => ['value' => 0, 'text' => 'nie', 'color' => 'default'],
        ];
        $grid->column('is_read', __('Przeczytana'))->switch($states );
        $grid->column('is_answer', __('Odpowiedź'))->display(function ($bool){
            return ($bool == 0)?"<span class='label label-danger'>nie</span>":"<span class='label label-default'>tak</span>";
        });
        $grid->column('created_at', __('Czas'))->sortable()->width(100);
        $grid->setActionClass(Actions::class);

//        $grid->column('updated_at', __('Updated at'));


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
