<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioLocalization extends Model
{
    protected $fillable = [
        'portfolio_id','lang','title','short_content','content','meta_title','meta_descriptions','robots'
    ];

    protected $table = 'portfolios_localization';

    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Portfolios()
    {
        return $this->belongsTo(Portfolio::class);
    }


}
