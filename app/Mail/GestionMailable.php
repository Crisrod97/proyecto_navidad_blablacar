<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GestionMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Contáctanos ShareCar"; //Asunto del mail
    public $contacto;

    public function __construct($contacto)
    {
        $this->contacto = $contacto;
    }

    public function build()
    {
        return $this->view('emails.gestion');
    }
}
