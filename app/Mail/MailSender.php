<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailSender extends Mailable
{
    use Queueable, SerializesModels;
    public $textString;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($string)
    {
        $this->textString = $string;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->subject('test')->view('mails.mail');
    }
}
