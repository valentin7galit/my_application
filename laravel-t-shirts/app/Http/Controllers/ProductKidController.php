<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductKidController extends Controller
{
    public function index()
    {
        $products = Product::where('category_id', '=', 3)
            ->with('product_images', 'colours')
            ->get();
        $prices = Product::where('category_id', '=', 3)->get();
        
        return view('pages.productskids', [
            'products' => $products,
            'prices' => $prices
        ]);
    }
}
