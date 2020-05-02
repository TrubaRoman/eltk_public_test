<?php

namespace App\Models;

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

    public static function setReadMessage($id)
    {
        $contacts = self::first($id);
        $contacts->is_read = self::IS_READ_MESSAGE;
        return $contacts->update();
    }

    public function uploadCV($file)
    {
        if($file == null)return;
        $this->removeCV();//storage видаляє картинку в папці, якшо вона існує
        $filename = $this->name.'_'.$this->surname.'_'.Str::random(2).'.'.$file->extension();//потім створюється імя нової картинки
        $file->storeAs('public/',$filename);//зберігаємо файл в папку
        $this->cv = $filename;// завантажуємо імя нового файла в поле image
        $this->save();// зберігаємо імя картинки в базу
    }

    public function removeCV()
    {
        if ($this->cv !=null)
        {
            Storage::delete('public/'.$this->cv);
        }
    }



}
