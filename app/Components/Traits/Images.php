<?php


    namespace App\Components\Traits;
    use Illuminate\Support\Facades\Storage;

    trait Images
    {
        public function getLastImage()
        {

            if (is_array($this->image) && (!empty($this->image))){
                return self::getImage($this->image[count($this->image) > 0?count($this->image)-1:count($this->image)]);
            }

            else return self::getImage($this->image);
        }

        /**
         * @param $image
         * @return string( path image | path defoult image)
         */

        protected static function getImage($image)
        {
            if($image == null){
                return '/build/img/noimage.png';
            }

            return Storage::url($image);
        }
    }