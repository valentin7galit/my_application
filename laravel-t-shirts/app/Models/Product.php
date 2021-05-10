<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'short_description',
        'currency',
        'price',
        'description',
        'rating',
        'published_id',
        'code',
        'features',
    ];

    public function sizes(): belongsToMany
    {
        return $this->belongsToMany(Size::class, LotSize::class, 'product_id');
    }
    public function product_categories(): belongsTo
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }
    public function product_images(): belongsTo
    {
        return $this->belongsTo(ProductImage::class, 'image_id');
    }
    public function colours(): belongsTo
    {
        return $this->belongsTo(Colour::class, 'colour_id');
    }
    public function product_galleries(): hasMany
    {
        return $this->hasMany(ProductGallery::class, 'product_id', 'id');
    }
}
