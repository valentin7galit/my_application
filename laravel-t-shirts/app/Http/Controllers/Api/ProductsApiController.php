<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductsApiController extends Controller
{
    public function index()
    {
        $products = Product::with('product_images')->get();;
        
        return $products;
    }

    public function show($id)
    {
        return Product::find($id);
    }

    public function update(Request $request, $id)
    {
        $products = Product::findOrFail($id);
        $products->update($request->all());

        return $products;
    }

    public function delete(Request $request, $id)
    {
        $products = Product::findOrFail($id);
        $products->delete();

        return 204;
    }
}
