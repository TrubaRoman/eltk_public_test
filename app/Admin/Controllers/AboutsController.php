<?php

namespace App\Admin\Controllers;

use App\Models\Abouts;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Str;

class AboutsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'O Nas';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Abouts());

        $grid->column('id', __('Id'))->sortable();;
        $grid->column('sort', __('Sortowanie'))->editable();
        $grid->column('status', __('Widoczny'))->switch();
        $grid->column('icons', __('Ikona'))->editable();
        $grid->column('type_content', __('Typ zawartości'))->select([
            'main'=> 'główna zawartość',
            'block' => 'blok'
        ]);
        $grid->localizations('Treść językowa')->display(function ($localize) {
            $count = count($localize);
            return ($count < count(config('app.locales')))?"<span class='label label-danger'>{$count}</span>":"<span class='label label-success'>{$count}</span>";

        })->help('Jeśli brakuje tekstu w jednym z dostępnych języków, etykieta będzie czerwona... Aby dodać tekst, klikni na (Wyświetl
)-> (Treść językowa) przycisk (+ Nowy)');
        $grid->column('created_at', __('Data utworzenia '))->date('Y-m-d')->hide();
        $grid->column('updated_at', __('Data aktualizacji'))->date('Y-m-d')->hide();

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
        $show->field('image', __('Obraz'));
        $show->field('alt_image', __('Alternatywny obraz'));
        $show->field('sort', __('Sortowanie'));
        $show->field('status', __('Widoczny'));
        $show->field('icons', __('Icons'));
        $show->field('type_content', __('Typ zawartości'));
        $show->field('created_at', __('Data utworzenia'));
        $show->field('updated_at', __('Data aktualizacji'));

        $show->localizations('Treść językowa', function ($localizations) {

            $localizations->resource('/admin/abouts-localizations');

            $localizations->id()->sortable();
            $localizations->abouts_id()->sortable();
            $localizations->column('lang')->display(function ($title) {

                return "<img src='/build/img/flags/24/{$title}.png'> &nbsp;$title</img>";

            });
            $localizations->title();
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
        $form = new Form(new Abouts());
        $form->number('sort', __('Sortowanie'))->rules('integer');
        $form->switch('status', __('Widoczny'));
        $form->icon('icons', __('Icons'));
        $form->select('type_content', __('Typ zawartości'))->options([
           'main'=> 'główna zawartość',
            'block' => 'blok'
        ])->default('desc')->help('Ze statusem "Blok" ta zawartość zostanie ułożona w bloki..');

        return $form;
    }
}
