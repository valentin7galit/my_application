<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesApiController extends Controller
{
    public function showApi($id)
    {
        $categories = Category::with('articles')->findOrFail($id);
        
        return $categories;
    }

    public function delete(Request $request, $id)
    {
        $categories = Category::findOrFail($id);
        $categories->delete();

        return 204;
    }
}
