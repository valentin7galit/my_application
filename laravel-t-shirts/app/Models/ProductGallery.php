<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductGallery extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'path',
        'name',
    ];

    public function products(): belongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
