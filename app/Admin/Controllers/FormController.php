<?php


    namespace App\Admin\Controllers;


    use App\Http\Controllers\Controller;
    use Encore\Admin\Layout\Content;
    use Encore\Admin\Widgets;
    use App\Admin\Forms\Settings;

    class FormController extends Controller
    {

        public function settings(Content $content)
        {
            return $content
                ->title('Tabbed form')
                ->body(Widgets\Tab::forms([
                    'basic'    => Settings\Basic::class,
//                    'site'     => Settings\Site::class,
//                    'upload'   => Settings\Upload::class,
//                    'database' => Settings\Database::class,
//                    'develop'  => Settings\Develop::class,
                ]));
        }

    }