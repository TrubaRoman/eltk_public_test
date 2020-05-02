<?php

namespace App\Admin\Controllers;

use App\Models\Cv;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Widgets\Table;
use Illuminate\Support\Facades\Storage;

class Cvcontroller extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'CV';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Cv());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('surname', __('Surname'));
        $grid->column('phone', __('Phone'));
        $grid->column('email', __('Email'));
        $grid->column('offer', __('Offer'));
        $grid->column('driving_license', __('Prawo jazd'))->sortable()->bool();
        $grid->column('sep', __('Sep'))->sortable()->bool();
        $grid->column('udt', __('Udt'))->sortable()->bool();
        $grid->column('experience', __('Experience'))->sortable();
        $grid->column('message', __('Message'))->limit(300);
        $grid->column('cv', __('Cv'))->downloadable()
//            ->qrcode(function ($path) {
//            return Storage::disk('admin')->url($path);
//        })
        ;
        $grid->column('is_read', __('Is read'))->switch();
        $grid->column('ip', __('Ip'));
        $grid->column('lang','')->display(function ($lang) {

            return "<img src='/build/img/flags/24/{$lang}.png'> &nbsp;$lang</img>";

        })->sortable()->help('Język zainstalowany na stronie nadawcy')->width(80);
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
        $show = new Show(Cv::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('surname', __('Surname'));
        $show->field('phone', __('Phone'));
        $show->field('email', __('Email'));
        $show->field('offer', __('Offer'));
        $show->field('driving_license', __('Driving license'));
        $show->field('sep', __('Sep'));
        $show->field('udt', __('Udt'));
        $show->field('experience', __('Experience'));
        $show->field('message', __('Message'));
        $show->field('cv', __('Cv'));
        $show->field('is_read', __('Is read'));
        $show->field('ip', __('Ip'));
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
        $form = new Form(new Cv());

        $form->text('name', __('Name'));
        $form->text('surname', __('Surname'));
        $form->mobile('phone', __('Phone'));
        $form->email('email', __('Email'));
        $form->text('offer', __('Offer'));
        $form->switch('driving_license', __('Driving license'));
        $form->switch('sep', __('Sep'));
        $form->switch('udt', __('Udt'));
        $form->number('experience', __('Experience'));
        $form->textarea('message', __('Message'));
        $form->file('cv', __('Cv'));
        $form->switch('is_read', __('Is read'));
        $form->ip('ip', __('Ip'));
        $form->text('lang', __('Lang'));

        return $form;
    }
}
