<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = [
         'table'
    ];
    protected $table = 'price';


    public static function getPrice()
    {
        return static::where('lang',app()->getLocale())->firstOrFail();
    }

}
