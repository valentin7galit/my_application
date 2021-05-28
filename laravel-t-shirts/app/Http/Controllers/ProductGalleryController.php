<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductGallery;

class ProductGalleryController extends Controller
{
    /* Controller API */

    public function indexApi()
    {
        return ProductGallery::all();
    }

    public function showApi($id)
    {
        $galleries = ProductGallery::with('products')
            ->findOrFail($id);
        
        return $galleries;
    }
}
