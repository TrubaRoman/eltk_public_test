<?php

namespace App\Admin\Controllers;

use App\Models\LocalizedModel;
use App\Models\Services;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ServicesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Services';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Services());

        $grid->column('id', __('Id'));
        $grid->column('slug', __('Slug'));
        $grid->column('image')->image();
        $grid->column('status', __('Status'));
        $grid->column('sort', __('Sort'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->localizations('Language Variants')->display(function ($localize) {
            $count = count($localize);
            return ($count < count(config('app.locales')))?"<span class='label label-danger'>{$count}</span>":"<span class='label label-success'>{$count}</span>";

        });

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
        $show = new Show(Services::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('slug', __('Slug'));
        $show->image('image');
        $show->field('status', __('Status'));
        $show->field('sort', __('Sort'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->localizations('Language Variants', function ($localizations) {

            $localizations->resource('/admin/services-localizations');

            $localizations->id()->sortable();
            $localizations->services_id()->sortable();
            $localizations->menu();
            $localizations->column('lang')->display(function ($title) {

                return "<img src='/build/img/flags/24/{$title}.png'> &nbsp;$title</img>";

            });
//            $localizations->lang()->image('public/build/img/flag/24/uk.png');
            $localizations->short_content()->limit(10);
            $localizations->content()->limit(40);



            $localizations->filter(function ($filter) {
                $filter->like('lang');
            });
        });

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Services());

        $form->text('slug', __('Slug'));
        $form->image('image', __('Image'))->crop(100, 100, 25, 25);
        $form->switch('status', __('Status'));
        $form->number('sort', __('Sort'));

        return $form;
    }

}
