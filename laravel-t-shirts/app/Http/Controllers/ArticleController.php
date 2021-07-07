<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Comment;

class ArticleController extends Controller
{
    public function show($id)
    {
        $articles = Article::with('images', 'categories', 'tags', 'galleries', 'author', 'comments')
            ->findOrFail($id);
        
        $comments = Comment::with('authors', 'articles')
            ->get();
        
        return view('pages.article', [
            'articles' => $articles,
            'comments' => $comments
        ]);
    }
}
