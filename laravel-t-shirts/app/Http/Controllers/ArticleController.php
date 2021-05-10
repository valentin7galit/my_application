<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function show($id)
    {
        $articles = Article::with('images', 'categories', 'tags')
            ->findOrFail($id);
        
        return view('pages.article', [
            'articles' => $articles
        ]);
    }
}
