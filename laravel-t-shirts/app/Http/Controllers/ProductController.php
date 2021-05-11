<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function show($id)
    {
        $products = Product::with('product_images', 'colours', 'product_galleries')
            ->findOrFail($id);
        
        return view('pages.product', [
            'products' => $products
        ]);
    }
}
