<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductGallery;

class ProductsGalleryApiController extends Controller
{
    public function index()
    {
        return ProductGallery::all();
    }

    public function show($id)
    {
        $galleries = ProductGallery::with('products')->findOrFail($id);
        
        return $galleries;
    }
}
