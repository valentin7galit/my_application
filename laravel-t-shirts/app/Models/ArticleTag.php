<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ArticleTag extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function articles(): belongsTo
    {
        return $this->belongsTo(Article::class, 'article_id');
    }
    public function tags(): belongsTo
    {
        return $this->belongsTo(Tag::class, 'tag_id');
    }
}
