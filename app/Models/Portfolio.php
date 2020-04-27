<?php

namespace App\Models;

use App\Components\Traits\Images;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends LocalizedModel
{

//    protected $casts = ['image' => 'json' ];


    public const  IS_ACTIVE = '1';

    public const  IS_WAIT = '0';


    protected $fillable = [
       'id', 'slug', 'image','category_id', 'alt_image','project_name','client','duration','address','sort','status'
    ];
    use Sluggable;
    use Images;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'slug'
            ]
        ];
    }


    public function setImageAttribute($image)
    {
        if (is_array($image)) {
            $this->attributes['image'] = json_encode($image);
        }
    }

    public function getImageAttribute($image)
    {
        return json_decode($image, true);
    }

    public function isWait(): bool
    {
        return $this->status === self::IS_WAIT;
    }


    public function isActive(): bool
    {
        return $this->status === self::IS_ACTIVE;
    }

    public function portfolioList(){
        return self::withLocalization(app()->getLocale())->where('status',Portfolio::IS_ACTIVE)->orderBy('sort')->get();
    }

    public function portfolioNoCurrent($slug)
    {
        $list = $this->portfolioList();
        return $list->where('slug','!=',$slug);
    }

    public function portfolioItem($slug)
    {
        return self::withLocalization(app()->getLocale())->where(['status'=>Portfolio::IS_ACTIVE,'slug'=>$slug])->firstOrFail();
    }


}
