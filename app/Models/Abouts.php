<?php

namespace App\Models;


use App\Components\Traits\Images;
use Illuminate\Database\Eloquent\Model;

class Abouts extends LocalizedModel
{

    protected $fillable = [
     'image','alt_image','sort','status','icons','type_content'
    ];
    protected $table = 'abouts';

use Images;


}
