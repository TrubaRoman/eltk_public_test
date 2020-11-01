<?php

namespace App\Admin\Controllers;

use App\Models\Referencje;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Str;

class ReferencjeController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Referencje';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Referencje());

        $grid->column('id', __('Id'))->hide();
        $grid->column('slug',__('Slug'));
        $grid->column('content_pl', __('Tekst z listu pl'))->help('Tekst z listu (polski)')->width(1000)->limit(200);
        $grid->column('content_en', __('Tekst z listu en'))->help('Tekst z listu (angelski)')->limit(300)->hide();
        $grid->column('content_uk', __('Tekst z listu uk'))->help('Tekst z listu (ukraiński)')->limit(300)->hide();
        $grid->column('image', __('Dokument Scan '))->image()->help('Skan dokumentu rekomendacji (Główny)');
        $grid->column('alt_image',__('Alternatywny obraz tekstowy'))->help('alternatywny tekst obrazu (będzie używany, gdy na stronie nie ma prawdziwego obrazu)')->hide();
        $grid->column('thumbnail', __('Dokument  scan (miniatura)'))->image()->help('Skan dokumentu rekomendacji (miniatura) Stosowane w przypadku małych obrazów w witrynie')->hide();
        $grid->column('from_whom', __('Kto poleca'))->help('Nazwisko osoby, która napisała rekomendację');
        $grid->column('position_pl', __('Stanowisko pl'))->help('Stanowisko osoby, która napisała rekomendację (polski)');
        $grid->column('position_en', __('Stanowisko en'))->help('Stanowisko osoby, która napisała rekomendację (angielski)')->hide();
        $grid->column('position_uk', __('Stanowisko uk'))->help('Stanowisko osoby, która napisała rekomendację (ukraiński)')->hide();
        $grid->column('logo', __('Logo '))->image()->help('Logo firmy udzielającej rekomendacji');
        $grid->column('reference_date', __('Data utworzenia dokumentu'));
        $grid->column('sort_order', __('Kolejność'))->editable();
        $grid->column('status', __('Widoczność'))->switch();
        $grid->column('created_at', __('Created at'))->date('Y-m-d')->hide();
        $grid->column('updated_at', __('Updated at'))->date('Y-m-d')->hide();
        $grid->column('meta_title_pl','Meta_tyluł (polski)')->help(' informacje serwisowe dla wyszukiwarek (metatagi)')->hide();
        $grid->column('meta_title_en','Meta_tyluł (angielski)')->help(' informacje serwisowe dla wyszukiwarek (metatagi)')->hide();
        $grid->column('meta_title_uk','Meta_tyluł (ukraiński)')->help(' informacje serwisowe dla wyszukiwarek (metatagi)')->hide();
        $grid->column('meta_description_pl', 'Meta_opis (polski)')->help(' informacje serwisowe dla wyszukiwarek (metatagi)')->hide();
        $grid->column('meta_description_en', 'Meta_opis (angelski)')->help(' informacje serwisowe dla wyszukiwarek (metatagi)')->hide();
        $grid->column('meta_description_uk', 'Meta_opis (ukraiński)')->help(' informacje serwisowe dla wyszukiwarek (metatagi)')->hide();

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
        $show = new Show(Referencje::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('slug',__('Slug'));
        $show->field('content_pl', __('Tekst z listu pl'))->help('Tekst z listu (polski)');
        $show->field('content_en', __('Tekst z listu en'))->help('Tekst z listu (angelski)');
        $show->field('content_uk', __('Tekst z listu uk'))->help('Tekst z listu (ukraiński)');
        $show->field('image',__('Dokument scan'))->help('Skan dokumentu rekomendacji (Główny)');;
        $show->field('thumbnail', __('Thumbnail scan'));
        $show->field('alt_image',__('Alternatywny obraz tekstowy'))->help('alternatywny tekst obrazu (będzie używany, gdy na stronie nie ma prawdziwego obrazu)');
        $show->field('from_whom', __('Kto poleca'))->help('Nazwisko osoby, która napisała rekomendację');
        $show->field('position_pl', __('Stanowisko pl'))->help('Stanowisko osoby, która napisała rekomendację (polski)');
        $show->field('position_en', __('Stanowisko en'))->help('Stanowisko osoby, która napisała rekomendację (angelski)');
        $show->field('position_uk', __('Stanowisko uk'))->help('Stanowisko osoby, która napisała rekomendację (ukraiński)');
        $show->field('logo', __('Logo'))->help('Logo firmy udzielającej rekomendacji');
        $show->field('reference_date', __('Data utworzenia dokumentu'));
        $show->field('sort_order',__('Kolejność'))->badge();
        $show->field('status', __('Widoczność'));

        $show->field('meta_title_pl','Meta_tyluł (polski)')->help(' informacje serwisowe dla wyszukiwarek (metatagi)');
        $show->field('meta_title_en','Meta_tyluł (angielski)')->help(' informacje serwisowe dla wyszukiwarek (metatagi)');
        $show->field('meta_title_uk','Meta_tyluł (ukraiński)')->help(' informacje serwisowe dla wyszukiwarek (metatagi)');
        $show->field('meta_description_pl', 'Meta_opis (polski)')->help(' informacje serwisowe dla wyszukiwarek (metatagi)');
        $show->field('meta_description_en', 'Meta_opis (angelski)')->help(' informacje serwisowe dla wyszukiwarek (metatagi)');
        $show->field('meta_description_uk', 'Meta_opis (ukraiński)')->help(' informacje serwisowe dla wyszukiwarek (metatagi)');
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
        $form = new Form(new Referencje());
        $form->text('slug',__('Slug'));
        $form->ckeditor('content_pl', __('Tekst z listu pl'))->help('Tekst z listu (polski)');
        $form->ckeditor('content_en', __('Tekst z listu en'))->help('Tekst z listu (angelski)');
        $form->ckeditor('content_uk', __('Tekst z listu uk'))->help('Tekst z listu (ukraiński)');
        $form->image('image','Skan dokumentu')->removable()->name(function ( $file ){
            return 'referencje_'.Str::random(2).'.'.$file->guessExtension();
        })->help('Skan dokumentu rekomendacji (Główny)');

        $form->text('alt_image',__('Alternatywny obraz tekstowy'))->help('alternatywny tekst obrazu (będzie używany, gdy na stronie nie ma prawdziwego obrazu)');


        $form->image('thumbnail','Small image')->resize(450, null, function ($constraint) {
            $constraint->aspectRatio();
        })->name(function ( $file ){
            return 'thumbnails/referencje_small'.Str::random(2).'.'.$file->guessExtension();
        })->thumbnail('small', $width = 330, $height = 250)->help('Obraz miniatury jest używany w witrynie w miejscach, w których wymagana jest miniatura ... w celu zwiększenia wydajności strony');
        $form->text('from_whom', __('From whom'));
        $form->text('position_pl', __('Stanowisko pl'))->help('Stanowisko osoby, która napisała rekomendację (polski)');
        $form->text('position_en', __('Stanowisko en'))->help('Stanowisko osoby, która napisała rekomendację (angelski)');
        $form->text('position_uk', __('Stanowisko uk'))->help('Stanowisko osoby, która napisała rekomendację (ukraiński)');

        $form->image('logo','Logo')->resize(140, null, function ($constraint) {
            $constraint->aspectRatio();
        })->name(function ( $file ){
            return 'logo_referencje/referencje_small'.Str::random(2).'.'.$file->guessExtension();
        })->help('Logo firmy udzielającej rekomendacji');

        $form->text('reference_date', __('Data utworzenia dokumentu'));
        $form->number('sort_order',__('Kolejność'));
        $form->switch('status',__('Widoczność'));


       $form->text('meta_title_pl','Meta_tyluł (polski)')->help(' informacje serwisowe dla wyszukiwarek (metatagi)');
       $form->text('meta_title_en','Meta_tyluł (angielski)')->help(' informacje serwisowe dla wyszukiwarek (metatagi)');
       $form->text('meta_title_uk','Meta_tyluł (ukraiński)')->help(' informacje serwisowe dla wyszukiwarek (metatagi)');
       $form->text('meta_description_pl', 'Meta_opis (polski)')->help(' informacje serwisowe dla wyszukiwarek (metatagi)');
       $form->text('meta_description_en', 'Meta_opis (angelski)')->help(' informacje serwisowe dla wyszukiwarek (metatagi)');
       $form->text('meta_description_uk', 'Meta_opis (ukraiński)')->help(' informacje serwisowe dla wyszukiwarek (metatagi)');

        return $form;
    }
}
