<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LotSize extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'total_stock',
    ];

    public function sizes(): belongsTo
    {
        return $this->belongsTo(Size::class, 'size_id');
    }
    public function products(): belongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
