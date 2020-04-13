<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    const  COUNTER_LIMIT = '3';

    protected $fillable = [
        'title_pl','title_uk','title_en','icon','int_count','sort','status'
    ];
    public $timestamps = false;

    public function getTitleAttribute()
    {
        $locale = app()->getLocale();
        $column = "title_{$locale}";
        return $this->{$column};
    }


    public function scopeCounterData()
    {
        return $this
            ->where('status',true)
           ->orderBy('sort')
            ->limit(self::COUNTER_LIMIT)
            ->get();
    }




}
