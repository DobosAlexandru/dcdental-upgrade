<?php

namespace App\Actions;
use Illuminate\Support\Facades\Mail;
use App\Models\Programare;
use App\Mail\ContactLeadMailable;
class EmailContactLeadAction
{
    public function __invoke(array $formData)
    {
        $this->getOrCreateContactLead($formData);
    }

    private function getOrCreateContactLead(array $formData): Programare
    {
        return Programare::firstOrCreate($formData);
    }

    private function sendContactLeadToEmail(Programare $programare): void
    {
        Mail::to(['alex@cromaticdesign.ro'])
        ->send(new ContactLeadMailable($programare));
    }
}
