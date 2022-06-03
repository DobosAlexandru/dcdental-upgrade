<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Treatment extends Model
{
    use HasFactory;

    protected $table = 'treatments';
    protected $fillable = [
        'name',
        'slug',
        'tarifCategory_id',
        'price',
        'price_unit',
        'info'
    ];

    public function tarifCategory(): BelongsTo{
        return $this->belongsTo(TarifCategory::class, 'tarifCategory_id');
    }

    public static function searchPost($search){
        return empty($search) ? static::query() : static::query()->where('id', 'like', '%' . $search. '%')
        ->orWhere('name', 'like', '%' . $search. '%')
        ->orWhere('tarifCategory_id', 'like', '%' . $search. '%');
    }

    public function scopeCategory(Builder $query, string $category): Builder{
        return $query->where('tarifCategory_id', $category);
    }

    public function scopeFeatured(Builder $query):Builder{
        return $query->where('featured', true);
    }

    // public function scopePublished(Builder $query):Builder{
    //     return $query->whereNotNull('published_at')->where('published_at', '<=' , new \DateTime());
    // }

    public function scopeRecentAsc(Builder $query):Builder{
        return $query->orderBy('name', 'asc');
    }

    public function scopeRecentDesc(Builder $query):Builder{
        return $query->orderBy('name', 'desc');
    }
}
