<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutsLocalization extends Model
{
    protected $fillable = [
      'abouts_id','lang','title','short_content','content'
    ];

    protected $table = 'abouts_localization';

    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Abouts()
    {
        return $this->belongsTo(Abouts::class);
    }

}
