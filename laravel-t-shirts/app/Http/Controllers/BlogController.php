<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class BlogController extends Controller
{
    public function index()
    {
        $articles = Article::whereNotNull('published_at')
            ->orderBy('created_at', 'desc')
            ->with('images', 'categories', 'tags')
            ->get();
        
        return view('pages.blogpage', [
            'articles' => $articles
        ]);
    }
}
