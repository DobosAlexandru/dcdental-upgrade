<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TarifCategory extends Model
{
    use HasFactory;

    protected $table = 'tarif_categories';
    protected $fillable = ['name', 'slug','tarifCategory_id'];

    public function treatments(): HasMany{
        return $this->hasMany(Treatment::class, 'tarifCategory_id');
    }
}
