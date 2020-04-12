<?php

    namespace App\Admin\Forms\Settings;

    use Encore\Admin\Widgets\Form;
    use Illuminate\Http\Request;

    class Basic extends Form
    {
        /**
         * The form title.
         *
         * @var string
         */
        public $title = 'Basic';

        /**
         * Handle the form request.
         *
         * @param Request $request
         *
         * @return \Illuminate\Http\RedirectResponse
         */
        public function handle(Request $request)
        {


            admin_success('Processed successfully.');

            return back();
        }

        /**
         * Build a form here.
         */
        public function form()
        {
            $this->switch('website_enable', 'Zmiana strony')->help('Po zamknięciu strona nie będzie dostępna, a tło można wprowadzić normalnie');
            $this->text('website_title', 'Nazwa strony')->help("Metoda wywołania: config ('website_title')");
            $this->text('website_slogan', 'Hasło strony internetowej')->help("Slogan strony internetowej, metoda wywołania: config („website_slogan”)");
            $this->image('website_logo', 'Strona LOGO');
            $this->image('website_text_logo', 'Tekst strony LOGO');
//            $this->textarea('website_desc', '站点描述')->help('网站描述，有利于搜索引擎抓取相关信息');
//            $this->text('website_keywords', '站点关键词')->help('网站搜索引擎关键字');
//            $this->text('website_copyright', '版权信息')->help("调用方式：config('website_copyright')");
//            $this->text('website_icp', '备案信息')->help("调用方式：config('website_icp')");
//            $this->textarea('website_statistics', '网站统计代码')->help("网站统计代码，支持百度、Google、cnzz等，调用方式：config('website_statistics')");
        }

        /**
         * The data of the form.
         *
         * @return array $data
         */
        public function data()
        {
            return [

            ];
        }
    }