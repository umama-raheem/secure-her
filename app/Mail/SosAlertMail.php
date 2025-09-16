<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SosAlertMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $location;

    public function __construct($user, $location)
    {
        $this->user = $user;
        $this->location = $location;
    }

    public function build()
    {
        return $this->subject('🚨 SOS Alert from ' . $this->user->name)
                    ->view('emails.sos_alert');
    }
}