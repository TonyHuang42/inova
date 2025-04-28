<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class ContactFormMail extends Mailable
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('INOVA Contact Form Submission')
                    ->replyTo($this->data['email'], $this->data['name'])
                    ->view('emails.contact')
                    ->with('data', $this->data);
    }
}
