<?php

namespace App\Models;

use App\Models\LocalizedModel;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Services extends LocalizedModel
{

//    protected $casts = ['image' => 'json' ];


    public const  IS_ACTIVE = '1';

    public const  IS_WAIT = '0';


    protected $fillable = [
        'slug', 'image', 'sort','status'
    ];
    use Sluggable;

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
    /**
     *
     * @return string( path image in db| path defoult image)
     */
    public function getLastImage()
    {

        if (is_array($this->image)){
            return self::getImage($this->image[count($this->image)-1]);
        }

        else return self::getImage($this->image);
    }

    /**
     * @param $image
     * @return string( path image | path defoult image)
     */

    protected static function getImage($image)
    {
        if($image == null){
            return '/build/img/noimage.png';
        }

        return Storage::url($image);
    }



}
