<?php

namespace App\Models;

use App\Components\Traits\Images;
use Illuminate\Database\Eloquent\Model;

class Referencje extends Model
{

    public const IS_ACTIVE = '1';
    public const IS_WAIT = '0';

    protected $fillable = [
        'id','content_pl','content_en','content_uk',
        'image','thumbnail','from_whom',
        'position_pl','position_en','position_uk',
        'logo','reference_date','sort_order','status'
    ];

    protected $table = 'referencje';

    use Images;

    public function getContentAttribute()
    {
        $locale = app()->getLocale();
        $column = "content_{$locale}";
        return $this->{$column};
    }

    public function getPositionAttribute()
    {
        $locale = app()->getLocale();
        $column  = "position_{$locale}";
        return $this->{$column};

    }


    public function isActive(): bool
    {
        return $this->status === self::IS_ACTIVE;
    }

    public function isWait():bool
    {
        return $this->status === self::IS_WAIT;
    }
}
