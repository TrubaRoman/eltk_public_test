<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = [
         'table','meta_title','meta_descriptions','robots'
    ];
    protected $table = 'price';


    public static function getPrice()
    {
        return static::where('lang',app()->getLocale())->firstOrFail();
    }

}
