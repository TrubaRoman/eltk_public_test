<?php

namespace App\Models;

use App\Models\LocalizedModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Services extends LocalizedModel
{
    protected $fillable = [
        'slug', 'image', 'sort','status'
    ];

    /**
     *
     * @return string( path image in db| path defoult image)
     */
    public function getImage()
    {
        if($this->image == null){
            return '/build/img/noimage.png';
        }

        return Storage::url($this->image);
    }

}
