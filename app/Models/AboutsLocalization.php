<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutsLocalization extends Model
{
    protected $fillable = [
      'abouts_id','lang','title','title_two','content','content_two'
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
