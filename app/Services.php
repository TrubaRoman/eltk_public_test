<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends LocalizedModel
{
    protected $fillable = [
        'slug', 'image', 'sort','status'
    ];

}
