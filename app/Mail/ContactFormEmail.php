<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $body;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->senderName = $data['name'];
        $this->body = $data['body'];
        $this->replyEmail = $data['reply_to'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject('New personal site inquiry')
        ->from(env('PERSONAL_EMAIL_ADDRESS'))
        ->replyTo($this->replyEmail);

        return $this->markdown('emails.contact-form');
    }
}
