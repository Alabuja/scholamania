<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewGuestMail extends Mailable
{
    use Queueable, SerializesModels;
    public $sendMessage;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($sendMessage)
    {
        $this->sendMessage = $sendMessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.sendmessage')
                    ->subject('New Signup User')
                    ->with('sendMessage', $this->sendMessage);
    }
}
