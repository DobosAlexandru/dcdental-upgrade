<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programare extends Model
{
    use HasFactory;

    protected $table = 'programari';
    protected $fillable = [
        'name',
        'email',
        'telefon',
        'message',
        'appointment_date',
        'locatie'
    ];


}
