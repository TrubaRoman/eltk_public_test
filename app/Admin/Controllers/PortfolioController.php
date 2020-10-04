<?php

namespace App\Admin\Controllers;

use App\Models\Portfolio;
use Cviebrock\EloquentSluggable\Sluggable;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Encore\Admin\Widgets\Table;
use Illuminate\Support\Str;
use Route;

class PortfolioController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Portfolio';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Portfolio());

        $grid->column('id', __('Id'))->sortable();
        $grid->column('slug', __('Slug'))->editable();
        $grid->column('image', __('Image'))->image();
        $grid->column('alt_image', __('Alt image'))->editable()->help('Alternatywny tekst wyświetlany, gdy nie ma obrazu');
        $grid->column('thumbnail',__('Small image'))->image()->help('Obraz miniatury jest używany w witrynie w miejscach, w których wymagana jest miniatura ... w celu zwiększenia wydajności strony');
        $grid->column('project_name', __('Nazwa Projektu'))->sortable()->editable();
        $grid->column('client', __('Klient'))->sortable()->editable();
        $grid->column('duration', __('Data wykonania'))->sortable()->editable();
        $grid->column('address', __('Adres'))->editable();
        $grid->column('sort', __('Sortowanie'))->editable();
        $grid->column('status', __('Status'))->switch();
        $grid->column('created_at', __('Created at'))->date('Y-m-d')->hide();
        $grid->column('updated_at', __('Updated at'))->date('Y-m-d')->hide();
        $grid->localizations('Language Variants')->display(function ($localize) {
            $count = count($localize);
            return ($count < count(config('app.locales')))?"<span class='label label-danger'>{$count}</span>":"<span class='label label-success'>{$count}</span>";

        });
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
        $show = new Show(Portfolio::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('slug', __('Slug'));
        $show->image('image')->as(function ($image){
            $html = '';
            foreach($image as $item){
                $html .= "<img src='{$item}' style='max-height: 150px;margin-right: 10px'>";
            }
            return $html;
        })->unescape();
        $show->field('alt_image', __('Alt image'));
        $show->field('thumbnail',__('Small image'));
        $show->field('project_name', __('Nazwa Projektu'));
        $show->field('client', __('Klient'));
        $show->field('duration', __('Data wykonania'));
        $show->field('address', __('Adres'));
        $show->field('sort', __('Sortowanie'));
        $show->field('status', __('Status'));

        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        $show->localizations('Language Variants', function ($localizations) {

            $localizations->resource('/makita/portfolio-localizations');

            $localizations->id()->sortable();
            $localizations->portfolio_id()->sortable();
            $localizations->column('lang')->display(function ($title) {

                return "<img src='/build/img/flags/24/{$title}.png'> &nbsp;$title</img>";

            });
            $localizations->title();
            $localizations->short_content()->limit(10);
            $localizations->content()->limit(40);
            $localizations->meta_title();
            $localizations->meta_descriptions();
            $localizations->robots()->select(config('admin.robots_list'));


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
        $portfolio  = new Portfolio();
        $form = new Form( $portfolio );
       $form->text('slug', __('Slug'));
        $form->multipleImage('image','images')->resize(1200, null, function ($constraint) {
        $constraint->aspectRatio();
    })->crop(1200,800)->removable()->name(function ( $file ){
            return 'portfolios_'.Str::random(2).'.'.$file->guessExtension();
        });

        $form->image('thumbnail','Small image')->resize(740, null, function ($constraint) {
        $constraint->aspectRatio();
    })->crop(740,556)->removable()->name(function ( $file ){
            return 'thumbnails/portfolios_small'.Str::random(2).'.'.$file->guessExtension();
        })->help('Obraz miniatury jest używany w witrynie w miejscach, w których wymagana jest miniatura ... w celu zwiększenia wydajności strony');
        $form->text('alt_image', __('Alt image'))->help('Alternatywny tekst wyświetlany, gdy nie ma obrazu');
        $form->text('project_name', __('Nazwa Projektu'));
        $form->text('client', __('Klient'));
        $form->text('duration', __('Data wykonania'));
        $form->text('address', __('Adres'));
        $form->number('sort', __('Sortowanie'));
        $form->switch('status', __('Status'))->help('Pokazane czy nie');

        return $form;
    }
}