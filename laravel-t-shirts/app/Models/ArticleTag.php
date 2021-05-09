<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ArticleTag extends Model
{
    use HasFactory;

    public function articles(): hasMany
    {
        return $this->hasMany(Article::class, 'id');
    }
    public function tags(): hasMany
    {
        return $this->hasMany(Tag::class, 'id');
    }
}
