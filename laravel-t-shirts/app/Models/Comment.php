<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
    ];

    public function users(): belongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function articles(): belongsTo
    {
        return $this->belongsTo(Article::class);
    }
}
