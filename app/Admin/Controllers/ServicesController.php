<?php

namespace App\Admin\Controllers;

use App\Models\LocalizedModel;
use App\Models\Services;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Widgets\Table;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class ServicesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Usługi';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Services());
        $grid->enableHotKeys();
        $grid->column('id', __('Id'));
        $grid->column('slug', __('Slug'));
        $grid->column('image')->image();
        $grid->column('alt_image', __('Alt image'))->editable()->help('Alternatywny tekst wyświetlany, gdy nie ma obrazu');
        $grid->column('thumbnail')->image()->hide()->help('Obraz miniatury jest używany w witrynie w miejscach, w których wymagana jest miniatura ... w celu zwiększenia wydajności strony');
        $grid->column('status', __('Widoczny'))->switch();
        $grid->column('sort', __('Sortowanie'))->editable();
        $grid->column('created_at', __('Data utworzenia'))->date('Y-m-d')->hide();
        $grid->column('updated_at', __('Data aktualizacji'))->date('Y-m-d')->hide();
        $grid->localizations('Treść językowa')->display(function ($localize) {
            $count = count($localize);
            return ($count < count(config('app.locales')))?"<span class='label label-danger'>{$count}</span>":"<span class='label label-success'>{$count}</span>";

        })->help('Jeśli brakuje tekstu w jednym z dostępnych języków, etykieta będzie czerwona... Aby dodać tekst, klikni na (Wyświetl
)-> (Treść językowa) przycisk (+ Nowy)');
        $grid->Treśćjęzykowa()->display(function (){
        return '<i class="fa fa-language"> </i>';
    })->modal('Treść językowa', function ($model) {

        $meta = $model->localizations->map(function ($meta) {
            return $meta->only(['title','lang','short_content','content','meta_title', 'meta_descriptions','robots']);
        });
        return new Table(['Tytuł','język','krótka treść','główna zawartość','meta_tyluł', 'meta_opis','robots'], $meta->toArray());
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
        $show->image('image')->as(function ($image){
            $html = '';
            foreach($image as $item){
                $html .= "<img src=' {$item}' style='max-height: 150px;margin-right: 10px'>";
            }
            return $html;
        })->unescape();
        $show->field('alt_image','Alt_image');
        $show->field('thumbnail',__('Thumbnail'));
        $show->field('status', __('Status'));
        $show->field('sort', __('Sort'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->localizations('Language Variants', function ($localizations) {

            $localizations->resource('/makita/services-localizations');

            $localizations->id()->sortable();
            $localizations->services_id()->sortable();
            $localizations->column('lang')->display(function ($title) {

                return "<img src='/build/img/flags/24/{$title}.png'> &nbsp;$title</img>";

            });
//            $localizations->lang()->image('public/build/img/flag/24/uk.png');
            $localizations->short_content()->limit(10);
            $localizations->content()->limit(40);
            $localizations->meta_title();
            $localizations->meta_descriptions();
            $localizations->robots()->select(config('admin.robots_list'))->width(200);


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

        // multiple image
        $form->multipleImage('image','images')->resize(1600, null, function ($constraint) {
            $constraint->aspectRatio();
        })->crop(1600,1200)->removable()->name(function ( $file ){
        return 'services_'.Str::random(2).'.'.$file->guessExtension();
    });
        $form->text('alt_image','Alt image')->help('Alternatywny tekst wyświetlany, gdy nie ma obrazu');
        $form->image('thumbnail','Small image')->resize(720, null, function ($constraint) {
            $constraint->aspectRatio();
        })->crop(720,544)->name(function ( $file ){
            return 'thumbnails/services_small'.Str::random(2).'.'.$file->guessExtension();
        })->thumbnail('small', $width = 330, $height = 250)->help('Obraz miniatury jest używany w witrynie w miejscach, w których wymagana jest miniatura ... w celu zwiększenia wydajności strony');
        $form->switch('status', __('Status'));
        $form->number('sort', __('Sort'));

        return $form;
    }

}
