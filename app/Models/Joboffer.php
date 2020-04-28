<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Joboffer extends Model
{
    protected $fillable  = [
        'title_pl','title_en','title_uk','description_pl','description_en','description_uk','sort',
        'status'
    ];


    public function getTitleAttribute()
    {
        $locale = app()->getLocale();
        $column = "title_{$locale}";
        return $this->{$column};
    }



    public function getDescriptionAttribute()
    {
        $locale = app()->getLocale();
        $column = "description_{$locale}";
        return $this->{$column};
    }
}
