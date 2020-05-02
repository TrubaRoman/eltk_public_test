<?php

namespace App\Models;

use App\Components\Traits\FileUpload;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class Cv extends Model
{
    const IS_NEW_MESSAGE = 0;
    const IS_READ_MESSAGE = 1;

    protected $fillable = [
        'id',
        'name',
        'surname',
        'phone',
        'email',
        'offer',
        'driving_license',
        'sep',
        'udt',
        'experience',
        'message',
        'cv',
        'is_read',
        'ip',
        'lang'
    ];
 use FileUpload;

    public static function setReadMessage($id)
    {
        $contacts = self::first($id);
        $contacts->is_read = self::IS_READ_MESSAGE;
        return $contacts->update();
    }




}
