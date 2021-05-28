<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductImage;

class ProductImageController extends Controller
{
    /* Controller API */

    public function indexApi()
    {
        return ProductImage::all();
    }

    public function showApi($id)
    {
        $images = ProductImage::with('products')
            ->findOrFail($id);
        
        return $images;
    }
}
