<?php

namespace App\Admin\Controllers;

use App\Models\Menu;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class MenuController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Zarządzaj elementami menu';


    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Menu());

        $grid->column('id', __('Id'));
        $grid->column('parent_id', __('Parent id'));
        $grid->column('name_pl', __('Name pl'));
        $grid->column('name_en', __('Name en'));
        $grid->column('name_uk', __('Name uk'));
        $grid->column('url', __('Url'));
        $grid->column('sort_order', __('Sort order'))->editable();
        $grid->column('status', __('Status'))->switch();


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
        $show = new Show(Menu::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('parent_id', __('Parent id'));
        $show->field('name_pl', __('Name pl'));
        $show->field('name_en', __('Name en'));
        $show->field('name_uk', __('Name uk'));
        $show->field('url', __('Route name'));
        $show->field('sort_order', __('Sort order'));
        $show->field('status', __('Status'));


        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Menu());

        $form->number('parent_id', __('Parent id'));
        $form->text('name_pl', __('Name pl'));
        $form->text('name_en', __('Name en'));
        $form->text('name_uk', __('Name uk'));
        $form->text('url', __('Route Url'));
        $form->number('sort_order', __('Sort order'));
        $form->switch('status', __('Status'))->default(1);

        return $form;
    }
}
