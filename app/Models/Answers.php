<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{

    protected $fillable = [
        'contacts_id','name','email','subject','body'
    ];


    public function contacts()
    {
        return $this->belongsTo(Contacts::class,'contacts_id');
    }
}
