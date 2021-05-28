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

    /* Controller API */

    public function showApi($id)
    {
        return Product::find($id);
    }

    public function updateApi(Request $request, $id)
    {
        $products = Product::findOrFail($id);
        $products->update($request->all());

        return $products;
    }

    public function deleteApi(Request $request, $id)
    {
        $products = Product::findOrFail($id);
        $products->delete();

        return 204;
    }
}
