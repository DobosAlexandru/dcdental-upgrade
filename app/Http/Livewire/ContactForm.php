<?php

namespace App\Http\Livewire;
use App\Actions\EmailContactLeadAction;
use App\Mail\MailProgramare;
use App\Models\Programare;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{

    public $name = '';
    public $email = '';
    public $telefon = '';
    public $appointment_date = '';
    public $message = '';
    public $locatie = '';

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'telefon' => 'required',
        'appointment_date' => 'required',
        'message' => 'required | min:20',
        'locatie' => 'required'
    ];

    protected $messages = [
        'name.required' => 'Numele dumneavoastra este obligatoriu',
        'email.required' => 'Adresa de email este obligatorie',
        'email.email' => 'Adresa de email trebuie sa fie valida',
        'telefon.required' => 'Numarul de telefon este obligatoriu',
        'appointment_date.required' => 'Data programarii este obligatorie',
        'message.required' => 'Va rugam adaugati cateva informatii suplimentare',
        'message.min:20' => 'Campul acesta trebuie sa contina cel putin 20 de caractere',
        'locatie.required' => 'Locatia este obligatorie'
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function contactFormSubmit(){

        $this->validate();

        Programare::create([
            'name' => $this->name,
            'email' => $this->email,
            'telefon' => $this->telefon,
            'appointment_date' => $this->appointment_date,
            'message' => $this->message,
            'locatie' => $this->locatie
        ]);

        Mail::to('alex@cromaticdesign.ro')->send(new MailProgramare(
            $this->name,
            $this->email,
            $this->telefon,
            $this->appointment_date,
            $this->message,
            $this->locatie,
        ));

        $this->name = '';
        $this->email = '';
        $this->telefon = '';
        $this->appointment_date = '';
        $this->message = '';
        $this->locatie = '';

        return redirect()->route('raspuns-programare');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
