<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
;

class Contacts extends Model
{

    const  IS_NEW_MESSAGE = '0';
    const IS_READ_MESSAGE = '1';
    const IS_ANSWER_MESSAGE = '1';


    public $admin_name;
    public $admin_email;

    protected $fillable = [
        'name','email','subject','phone','body','lang','ip'
    ];

    public function __construct() {
        $this->admin_name = config('mail.admin-name');
        $this->admin_email = config('mail.admin-email');
    }

    public static function getCountNewMessages()
    {
        return self::where('is_read',self::IS_NEW_MESSAGE)->count();
    }

    public static function setReadMessage($id)
    {
        $contacts = self::find($id);
        $contacts->is_read = self::IS_READ_MESSAGE;
        return $contacts->update();
    }

}

