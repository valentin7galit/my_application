<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'title',
        'short_description',
        'content',
        'seo_title',
        'seo_description',
        'slug',
    ];

    public function tags(): belongsToMany
    {
        return $this->belongsToMany(Tag::class, 'article_tag');
    }
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'article_id');
    }
    public function images(): belongsTo
    {
        return $this->belongsTo(Image::class);
    }
    public function galleries(): hasMany
    {
        return $this->hasMany(Gallery::class, 'article_id');
    }
    public function categories(): belongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function users(): belongsTo
    {
        return $this->belongsTo(User::class);
    }
}
