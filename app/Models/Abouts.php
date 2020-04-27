<?php

namespace App\Models;


use App\Components\Traits\Images;
use Illuminate\Database\Eloquent\Model;

class Abouts extends LocalizedModel
{

    protected $fillable = [
     'image','alt_image','sort','status'
    ];
    protected $table = 'abouts';

use Images;


}
