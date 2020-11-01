<?php

namespace App\Models;

use App\Components\Traits\Images;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Referencje extends Model
{

    public const IS_ACTIVE = '1';
    public const IS_WAIT = '0';

    protected $fillable = [
        'id','content_pl','content_en','content_uk',
        'image','thumbnail','from_whom',
        'position_pl','position_en','position_uk',
        'logo','reference_date','sort_order','status',
        'alt_image','slug',
        'meta_title_en','meta_description_en',
        'meta_title_pl','meta_description_pl',
        'meta_title_uk','meta_description_uk',
    ];

    protected $table = 'referencje';

    public $locale;

    use Sluggable;

    use Images;

    public function __construct()
    {
        $this->locale = app()->getLocale();
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'slug'
            ]
        ];
    }

    public function getContentAttribute()
    {

        $column = "content_{$this->locale}";
        return $this->{$column};
    }

    public function getPositionAttribute()
    {
        $column  = "position_{$this->locale}";
        return $this->{$column};

    }

    public function getMetaTitleAttribute()
    {
        $column = "meta_title_{$this->locale}";
        return $this->{$column};
    }

    public function getMetaDescriptionAttribute()
    {
        $column = "meta_description_{$this->locale}";
        return $this->{$column};
    }

    public static function getReferenceList()
    {
       return self::where('status',Referencje::IS_ACTIVE)->orderBy('sort_order')->get();
    }

    public  static function getReferenceItem($slug)
    {
        return self::where(['status' => self::IS_ACTIVE, 'slug' => $slug])->firstOrFail();
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
