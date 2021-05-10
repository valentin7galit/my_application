<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'seo_title',
        'seo_description',
    ];

    public function articles(): hasMany
    {
        return $this->hasMany(Article::class, 'category_id', 'id');
    }
    public function child_categories(): hasMany
    {
        return $this->hasMany(Category::class, 'parent_category_id', 'id');
    }
    public function parent_categories(): belongsTo
    {
        return $this->belongsTo(Category::class, 'parent_category_id');
    }
}
