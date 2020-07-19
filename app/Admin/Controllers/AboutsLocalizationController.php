<?php

namespace App\Admin\Controllers;

use App\Models\AboutsLocalization;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class AboutsLocalizationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'O Nas "Zarządzanie treścią językową"';

    public function index(Content $content)
    {
        $content->breadcrumb(
            ['text' => 'O nas', 'url' => '/abouts'],
            ['text' => 'O Nas Zarządzanie treścią językową']
        );
        return parent::index($content); // TODO: Change the autogenerated stub
    }

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
        $grid->column('lang')->display(function ($lang) {

            return "<img src='/build/img/flags/24/{$lang}.png'> &nbsp;$lang</img>";

        })->sortable();
        $grid->column('title', __('Title'))->editable();
        $grid->column('short_content', __('Short content'))->editable();
        $grid->column('content', __('Content'))->editable();

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
        $form = new Form(new AboutsLocalization());

        $form->number('abouts_id', __('Abouts id'))->default(request()->abouts_id);
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
