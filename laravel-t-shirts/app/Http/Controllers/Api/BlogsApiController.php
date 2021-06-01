<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class BlogsApiController extends Controller
{
    public function index()
    {
        return Article::all();
    }

    public function store(Request $request)
    {
        return Article::create($request->all());
    }
}
