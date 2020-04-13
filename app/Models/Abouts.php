<?php

namespace App\Models;
use Illuminate\Support\Facades\Storage;

use Illuminate\Database\Eloquent\Model;

class Abouts extends LocalizedModel
{

    protected $fillable = [
     'image','alt_image','sort','status'
    ];
    protected $table = 'abouts';


    protected static function getImage($image)
    {
        if($image == null){
            return '/build/img/noimage.png';
        }

        return Storage::url($image);
    }

    public function getLastImage()
    {

        if (is_array($this->image)){
            return self::getImage($this->image[count($this->image)-1]);
        }

        else return self::getImage($this->image);
    }


}
