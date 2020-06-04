<?php


    namespace App\Components;

use Illuminate\Support\Collection;
    use File;

    class Settings
    {


        public static function settingSave($data)
        {
            $data['workdays'] =  self::worksdays($data['weekend']);
            $data['weekend'] =  self::weeksdays($data['weekend']);
            $filePath = config_path() . '/settings.php';
            $content = '<?php return ' . var_export($data, true) . ';';
           return File::put($filePath, $content);
        }


        public static function sttingGet()
        {
            return config('settings');
        }

        public static function worksdays($weekend)
        {

            $filtered = array_filter( __('/layouts/footer.weeks-days'),
                function ($key) use ($weekend) {
                    return !in_array($key, $weekend);
                },
                ARRAY_FILTER_USE_KEY
            );

          return array_keys($filtered);
        }

        public static function weeksdays($weekend)
        {

            $filtered = array_filter( __('/layouts/footer.weeks-days'),
                function ($key) use ($weekend) {
                    return in_array($key, $weekend);
                },
                ARRAY_FILTER_USE_KEY
            );

            return array_keys($filtered);
        }

    }