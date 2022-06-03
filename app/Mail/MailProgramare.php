<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailProgramare extends Mailable
{
    use Queueable, SerializesModels;
    protected $name;
    protected $email;
    protected $telefon;
    protected $appointment_date;
    protected $message;
    protected $locatie;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$email,$telefon,$appointment_date,$message,$locatie)
    {
        $this->name = $name;
        $this->email = $email;
        $this->telefon = $telefon;
        $this->appointment_date = $appointment_date;
        $this->locatie = $locatie;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Aveti o noua programare')->from($this->email)->view('admin.email-programare')->with([
            'nume' => $this->name,
            'adresaEmail' => $this->email,
            'nrTelefon' => $this->telefon,
            'dataProgramare' => $this->appointment_date,
            'locatieCabinet' => $this->locatie,
            'mesaj' => $this->message
        ]);
    }
}
