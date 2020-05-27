<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicesLocalization extends Model
{
    protected $fillable = [
      'services_id','lang','title','short_content','content','meta_title','meta_descriptions','robots'
    ];

    protected $table = 'services_localization';

    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Services()
    {
        return $this->belongsTo(Services::class);
    }
}
