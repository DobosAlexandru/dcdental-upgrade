<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serviciu extends Model
{
    use HasFactory;
    protected $table = 'servicii';
    protected $fillable = [
        'title',
        'nav_title',
        'slug',
        'cover_image',
        'video_id',
        'meta_description',
        'slug',
        'tagline'
    ];
}
