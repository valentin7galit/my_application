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

    /* Controller API */

    public function showApi($id)
    {
        return Article::find($id);
    }

    public function updateApi(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function deleteApi(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return 204;
    }
}
