<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewGuestFile extends Mailable
{
    use Queueable, SerializesModels;

    public $fileMessage;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($fileMessage)
    {
        $this->fileMessage = $fileMessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('noreply@scholamania.org.ng')
                    ->view('attachments.attachfile')
                    ->subject('Resources')
                    ->with('fileMessage', $this->fileMessage);
    }
}
