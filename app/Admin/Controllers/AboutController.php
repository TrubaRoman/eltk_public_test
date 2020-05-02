<?php
namespace App\Admin\Controllers;

use App\Models\Abouts;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Grid\Displayers\Actions;
use Encore\Admin\Show;
use Illuminate\Support\Str;

class AboutController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'O firmie';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Abouts());

        $grid->column('id', __('Id'));
        $grid->column('image', __('Image'))->image();
        $grid->column('alt_image', __('Alt image'));
        $grid->column('sort', __('Sort'));
        $grid->column('status', __('Status'))->bool();
        $grid->column('created_at', __('Created at'))->date('Y-m-d');
        $grid->column('updated_at', __('Updated at'))->date('Y-m-d');

        $grid->localizations('Language Variants')->display(function ($localize) {
            $count = count($localize);
            return ($count < count(config('app.locales')))?"<span class='label label-danger'>{$count}</span>":"<span class='label label-success'>{$count}</span>";
        });

        $grid->setActionClass(Actions::class);
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
        $show = new Show(Abouts::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('Image'));
        $show->field('alt_image', __('Alt image'));
        $show->field('sort', __('Sort'));
        $show->field('status', __('Status'));
        $show->column('created_at', __('Created at'))->date('Y-m-d');
        $show->column('updated_at', __('Updated at'))->date('Y-m-d');
        $show->localizations('Language Variants', function ($localizations) {

            $localizations->resource('/admin/abouts-localizations');

            $localizations->id()->sortable();
            $localizations->abouts_id()->sortable();

            $localizations->column('lang')->display(function ($title) {

                return "<img src='/build/img/flags/24/{$title}.png'> &nbsp;$title</img>";

            });

            $localizations->title()->limit(10);
            $localizations->title_two()->limit(10);
            $localizations->content()->limit(40);
            $localizations->content_two()->limit(40);



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
        $form = new Form(new Abouts());

        $form->image('image','images')->resize(509, null, function ($constraint) {
            $constraint->aspectRatio();
        })->crop(509, 598)->removable()->name(function ( $file ){
            return 'about_'.Str::random(2).'.'.$file->guessExtension();
        });
        $form->text('alt_image', __('Alt image'));
        $form->number('sort', __('Sort'));
        $form->switch('status', __('Status'))->default(1);

        return $form;
    }
}
