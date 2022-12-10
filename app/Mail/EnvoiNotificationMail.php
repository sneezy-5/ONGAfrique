<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnvoiNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $post;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $post)
    {
        //
        $this->user= $user;
        $this->user= $post;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.envoi-notification-mail');
    }
}
