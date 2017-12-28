<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FichaAdoption extends Mailable
{
    use Queueable, SerializesModels;

    public $ficha;
    public $pet;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($ficha)
    {
        $this->ficha = $ficha;
        $this->pet = $ficha->pet()->first();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("contacto@llevameacasa.com")
                    ->view('mailers.ficha');
        //return $this->view('view.name');
    }
}
