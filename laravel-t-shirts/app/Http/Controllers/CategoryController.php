<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show($id)
    {
        $categories = Category::with('articles')
            ->findOrFail($id);
        
        return view('pages.category', [
            'categories' => $categories
        ]);
    }

    /* Controller API */

    public function showApi($id)
    {
        $categories = Category::with('articles')
            ->findOrFail($id);
        
        return $categories;
    }
}
