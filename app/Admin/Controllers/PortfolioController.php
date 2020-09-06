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
        $grid->column('slug', __('Slug'));
        $grid->column('image', __('Image'))->image();
        $grid->column('alt_image', __('Alt image'))->editable();
        $grid->column('thumbnail',__('Small image'))->image();
        $grid->column('project_name', __('Project name'))->sortable();
        $grid->column('client', __('Client'))->sortable();
        $grid->column('duration', __('Duration'))->sortable();
        $grid->column('address', __('Address'));
        $grid->column('sort', __('Sort'))->editable();
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
        $show->field('project_name', __('Project name'));
        $show->field('client', __('Client'));
        $show->field('duration', __('Duration'));
        $show->field('address', __('Address'));
        $show->field('sort', __('Sort'));
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
        });
        $form->text('alt_image', __('Alt image'));
        $form->text('project_name', __('Project name'));
        $form->text('client', __('Client'));
        $form->text('duration', __('Duration'));
        $form->text('address', __('Address'));
        $form->number('sort', __('Sort'));
        $form->switch('status', __('Status'));

        return $form;
    }
}
