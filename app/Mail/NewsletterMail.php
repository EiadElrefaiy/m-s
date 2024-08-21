<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewsletterMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $message;

    public function __construct($subject, $message)
    {
        $this->subject = $subject;
        $this->message = $message; // Make sure this is a string
    }

    public function build()
    {
        return $this->view('emails.newsletter')
                    ->subject($this->subject)
                    ->with(['messageContent' => $this->message]); // Pass message content
    }
}
