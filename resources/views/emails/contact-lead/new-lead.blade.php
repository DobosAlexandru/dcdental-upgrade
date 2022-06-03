@component('mail::message')
# Programare noua! 🎉

__Nume:__ {{ $lead->name }}<br>
__Email:__ {{ $lead->email }}<br>
__Telefon:__ {{ $lead->telefon }}<br>
__Data Programarii:__ {{ $lead->appointment_date}}<br>
__Locatie:__ {{ $lead->locatie }}<br>

__Messaj__<br>
{{ $lead->message }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
