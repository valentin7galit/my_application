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
        return $this->belongsToMany(Tag::class, ArticleTag::class, 'article_id', 'tag_id');
    }
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'article_id', 'id');
    }
    public function images(): belongsTo
    {
        return $this->belongsTo(Image::class, 'image_id');
    }
    public function galleries(): hasMany
    {
        return $this->hasMany(Gallery::class, 'article_id', 'id');
    }
    public function categories(): belongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function author(): belongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
