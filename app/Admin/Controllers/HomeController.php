<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Widgets\InfoBox;
use Encore\Admin\Widgets\Tab;

class HomeController extends Controller
{
    public function index(Content $content)
    {

        return $content
            ->title('Dashboard')
            ->description('Description...')
            ->row(Dashboard::title())
            ->row(function (Row $row) {



                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::environment());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::extensions());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::dependencies());
                });
            });
    }
}
//return Admin::content(function (Content $content) use ($id) {
//
//    $content->header('Services');
//    $content->description('Detail');
//
//    $content->body(Admin::show(Services::findOrFail($id), function (Show $show) {
//
//        $show->id('ID');
//        $show->slug('Slug');
//        $show->image('Image');
//        $show->sort('sort');
//        $show->status('status');
//        $show->created_at();
//        $show->updated_at();
//
//        $show->localizations('Comments', function ($localization) {
//
//            $localization->resource('/admin/services-localizations');
//
//            $localization->id();
//            $localization->services_id()->sortable();
//
//            $localization->title()->limit(20);
//            $localization->lang('Language')->sortable();
//            $localization->content()->limit(20);
//
//
//            $localization->filter(function ($filter) {
//                $filter->like('content');
//            });
//        });
//
//
//    }));
//
//
//});
