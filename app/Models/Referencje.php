<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Referencje extends Model
{
    protected $fillable = [
        'id','content_pl','content_en','content_uk',
        'scan','thumbnail_scan','from_whom',
        'position_pl','position_en','position_uk',
        'logo','reference_date'
    ];
}
