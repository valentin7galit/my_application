<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductMenController extends Controller
{
    public function index()
    {
        $products = Product::where('category_id', '=', 1)
            ->with('product_images', 'colours', 'sizes', 'lot_sizes')
            ->get();
        $prices = Product::where('category_id', '=', 1)->get();
        
        return view('pages.productsmens', [
            'products' => $products,
            'prices' => $prices
        ]);
    }

    /* Controller API */

    public function indexApi()
    {
        $products = Product::where('category_id', '=', 1)->get();
        
        return $products;
    }
}
