<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'path',
        'size',
    ];

    public function articles(): belongsTo
    {
        return $this->belongsTo(Article::class);
    }
}
