<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductsKidApiController extends Controller
{
    public function index()
    {
        $products = Product::where('category_id', '=', 3)->get();
        
        return $products;
    }

    public function store(Request $request)
    {
        return Product::create($request->all());
    }
}
