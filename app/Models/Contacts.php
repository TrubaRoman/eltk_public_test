<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
;

class Contacts extends Model
{

    public $admin_name;
    public $admin_email;

    protected $fillable = [
        'name','email','subject','phone','body','lang','ip'
    ];

    public function __construct() {
        $this->admin_name = config('mail.admin-name');
        $this->admin_email = config('mail.admin-email');
    }
}
