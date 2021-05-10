<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'path',
        'size',
    ];

    public function articles(): hasMany
    {
        return $this->hasMany(Article::class, 'image_id', 'id');
    }
}
