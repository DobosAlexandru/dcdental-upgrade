<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $fillable = [
        'cover_image',
        'title',
        'slug',
        'excerpt',
        'body',
        'meta_description',
        'published_at',
        'featured',
        'author_id',
        'category_id'
    ];

    protected $casts = [
        'published_at' => 'datetime:Y/m/d'
    ];

    public function user():BelongsTo{
        return $this->belongsTo(User::class, 'author_id')->withDefault(('Admin User'));
    }

    public function category():BelongsTo{
        return $this->belongsTo(Category::class);
    }

    public function tags(): BelongsToMany{
        return $this->belongsToMany(Tag::class, 'post_tag');
    }

    public function getFormattedDateAttribute()
    {
        if($this->published_at) {
            return Carbon::parse($this->published_at)->translatedFormat('F j, Y');
        }
    }

    public static function searchPost($search){
        return empty($search) ? static::query() : static::query()->where('id', 'like', '%' . $search. '%')
        ->orWhere('title', 'like', '%' . $search. '%')
        ->orWhere('body', 'like', '%' . $search. '%');
    }

    public function scopeCategory(Builder $query, string $category): Builder{
        return $query->where('category_id', $category);
    }

    public function scopeFeatured(Builder $query):Builder{
        return $query->where('featured', true);
    }

    public function scopePublished(Builder $query):Builder{
        return $query->whereNotNull('published_at')->where('published_at', '<=' , new \DateTime());
    }

    public function scopeRecentAsc(Builder $query):Builder{
        return $query->orderBy('title', 'asc');
    }

    public function scopeRecentDesc(Builder $query):Builder{
        return $query->orderBy('title', 'desc');
    }
}
