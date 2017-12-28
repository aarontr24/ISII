<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailAlbergue extends Mailable
{
    use Queueable, SerializesModels;

    public $albergue;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($albergue)
    {
        $this->albergue = $albergue;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("contacto@llevameacasa.com")
                    ->view('mailers.albergue');
    }
}
