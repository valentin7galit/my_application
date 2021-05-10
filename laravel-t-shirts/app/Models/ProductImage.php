<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductImage extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'path',
        'name',
    ];

    public function products(): hasMany
    {
        return $this->hasMany(Product::class, 'image_id', 'id');
    }
}
