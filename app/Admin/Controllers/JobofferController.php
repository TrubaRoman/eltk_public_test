<?php

namespace App\Admin\Controllers;

use App\Models\Joboffer;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class JobofferController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\Joboffer';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Joboffer());

        $grid->column('id', __('Id'));
        $grid->column('title_pl', __('Title pl'))->editable();
        $grid->column('title_en', __('Title en'))->editable();
        $grid->column('title_uk', __('Title uk'))->editable();

        $grid->column('description_pl', __('Opis pracy pl'))->limit(200);
        $grid->column('description_en', __('Opis pracy en'))->limit(200);
        $grid->column('description_uk', __('Opis pracy uk'))->limit(200);
        $grid->column('sort', __('Sort'));
        $states = [
            'on' => ['text' => 'Tak'],
            'off' => ['text' => 'Nie'],
        ];

        $grid->column('status', __('Status'))->switch($states);
        $grid->column('created_at', __('Created at'))->hide();
        $grid->column('updated_at', __('Updated at'))->hide();

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
        $show = new Show(Joboffer::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title_pl', __('Title pl'));
        $show->field('title_en', __('Title en'));
        $show->field('title_uk', __('Title uk'));

        $show->field('description_pl', __('Description pl'));
        $show->field('description_en', __('Description en'));
        $show->field('description_uk', __('Description uk'));
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
        $form = new Form(new Joboffer());

        $form->text('title_pl', __('Title pl'));
        $form->text('title_en', __('Title en'));
        $form->text('title_uk', __('Title uk'));

        $form->ckeditor('description_pl', __('Description pl'));
        $form->ckeditor('description_en', __('Description en'));
        $form->ckeditor('description_uk', __('Description uk'));
        $form->number('sort', __('Sort'));
        $form->switch('status', __('Status'));

        return $form;
    }
}
