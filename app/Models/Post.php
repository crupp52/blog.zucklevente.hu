<?php

namespace App\Models;

use App\Enums\PostStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Post extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable = [
        'title',
        'content',
        'status'
    ];

    protected $casts = [
        'status' => PostStatus::class,
    ];

    public static function published()
    {
        return self::where('status', PostStatus::Published);
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function getReadTime(): float
    {
        return round(str_word_count(strip_tags($this->content)) / 90);
    }

    public function getShortContent($length = 350): string
    {
        return Str::limit(strip_tags($this->content), $length);
    }
}
