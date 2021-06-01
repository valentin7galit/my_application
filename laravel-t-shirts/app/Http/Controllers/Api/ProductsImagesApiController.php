<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductImage;

class ProductsImagesApiController extends Controller
{
    public function index()
    {
        return ProductImage::all();
    }

    public function show($id)
    {
        $images = ProductImage::with('products')->findOrFail($id);
        
        return $images;
    }
}
