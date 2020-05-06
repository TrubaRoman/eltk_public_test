<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class CvMali extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.cv-mail')
            ->text('emails.cv-mail-plain')
            ->with(
            [
                'data'=>$this->data,
                'imagePath' => public_path().'/build/images/'
            ]
        )->subject('CV z witryny')->from($this->data->email,$this->data->surname)
            ->attachFromStorage($this->data->cv);
    }
}
