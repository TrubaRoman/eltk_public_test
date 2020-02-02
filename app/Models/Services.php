<?php

namespace App\Models;

use App\Models\LocalizedModel;
use Illuminate\Database\Eloquent\Model;

class Services extends LocalizedModel
{
    protected $fillable = [
        'slug', 'image', 'sort','status'
    ];

}
