<?php


    namespace App\Components\Traits;
    use Illuminate\Support\Facades\Storage;
    use Illuminate\Support\Str;
    trait FileUpload
    {
        private $upload_dir;

        public function __construct()
        {
            $this->upload_dir = config('admin.upload.directory.file').'/';

        }

        public function uploadCV($file)
        {
           if($file == null){
               $this->cv = null;
               return $this->save();
           }
            $this->removeCV();//storage видаляє картинку в папці, якшо вона існує
            $filename = $this->name.'_'.$this->surname.'_'.Str::random(2).'.'.$file->extension();//потім створюється імя нової картинки
            $file->storeAs($this->upload_dir,$filename);//зберігаємо файл в папку
            $this->cv = $this->upload_dir.$filename;// завантажуємо імя нового файла в поле image
            // зберігаємо імя картинки в базу
           return $this->save();
        }

        public function removeCV()
        {
            if ($this->cv !=null)
            {
                Storage::delete($this->upload_dir.$this->cv);
            }
        }
    }