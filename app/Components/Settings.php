<?php


    namespace App\Components;

use Illuminate\Support\Collection;
    use File;

    class Settings
    {


        public static function settingSave($data)
        {

            $filePath = config_path() . '/settings.php';
            $content = '<?php return ' . var_export($data, true) . ';';
           return File::put($filePath, $content);
        }


        public static function sttingGet()
        {
            return config('settings');
        }


    }