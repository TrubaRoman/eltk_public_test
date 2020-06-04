<?php

    namespace App\Admin\Forms\Settings;

    use App\Components\Settings;
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

           if ( Settings::settingSave($request->all()))

            admin_success('Processed successfully.');
           else admin_error('no saved');

            return back();
        }

        /**
         * Build a form here.
         */
        public function form()
        {
            $data = Settings::sttingGet();
//            $states = ['on' => ['value' => 'on','text' => 'Online','color' => 'primary'],
//                    'off' => ['value' => 'off','text' => 'Offline','color' => 'danger'],];
//            $this->switch('website_enable', 'Zmiana strony')->states($states)->default($data['website_enable'])
//                ->help('Po zamknięciu strona nie będzie dostępna, a tło można wprowadzić normalnie');
            $this->mobile('public_phone', 'Numer telefonu  ')->options(['mask' => '+99 999 999 999'])->help('Publiczny numer telefonu strony internetowej')->default($data['public_phone'])->rules('required:string');
            $this->email('public_email', 'Adres email  ')->help('Publiczny adres email strony internetowej')->default($data['public_email'])->rules('required:email');
            $this->text('public_address', 'Adres  firmy')->help('Publiczny adres firmy ')->default($data['public_address'])->rules('required:string');

            $this->multipleSelect('locales', __('Opcje językoweg'))->options(function ()
            {
                $arr = [];
                foreach(config('app.locales')  as  $value){
                    $arr[$value] = $value;
                }
                return $arr;

            })->default($data['locales'])->help("Opcje językowe strony internetowej.");
            $this->time('hours_work_open', 'Godziny otwarcia ')->format('HH:mm')->default($data['hours_work_open']);
            $this->time('hours_work_closed', 'Godziny zamknięcia')->format('HH:mm')->default($data['hours_work_closed']);

            $this->multipleSelect('weekend','Weekend')->options(
                __('/layouts/footer.weeks-days')
            )->help('Dni wolne od pracy')->default($data['weekend']);
//            $this->image('website_logo', 'Strona LOGO');
//            $this->image('website_text_logo', 'Tekst strony LOGO');
//

            $this->text('nip', 'NIP')->help('NIP')->rules('required|string')->default($data['nip']);

            $this->url('sociallinks.facebook', 'Link facebook')->attribute(['sociallinks' => 'facebook'])->default($data['sociallinks']['facebook'])->rules('url');

            $this->url('sociallinks.twitter', 'Link twitter')->attribute(['sociallinks' => 'twitter'])->default($data['sociallinks']['twitter'])->rules('url');
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