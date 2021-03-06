<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductWomanController extends Controller
{
    public function index()
    {
        $products = Product::where('category_id', '=', 2)
            ->with('product_images')
            ->get();
        
        return view('pages.productswomen', [
            'products' => $products
        ]);
    }
}
