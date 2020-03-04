<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'parent_id',
        'name_pl',
        'name_en',
        'name_uk',
        'url',
        'sort_order',
        'status'
    ];

    public $timestamps = false;

    protected function getMenuAttribute()
    {
        $locale = app()->getLocale();
        $column = "name_{$locale}";
        return $this->{$column};
    }

    public function scopeIsStatus($query)
    {
        return $query->where('status',true);
    }

    public function scopeOfSort($query, $sort)
    {
        foreach ($sort as $column => $direction) {
            $query->orderBy($column, $direction);
        }

        return $query;
    }
}
