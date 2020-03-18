<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{

    public static  function add($fields)
    {
        $contacts = new static;
        $contacts->fill($fields);
        $contacts->save();
        return $contacts;
    }
}
