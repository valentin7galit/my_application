@extends('layouts')

@section('title')
    Blog
@endsection

@section('content')
    <div class="container py-3 bg-white">
        <h1 class="py-2">List of Articles</h1>
        <div class="row">
            <div class="col-12 py-2">
                <div class="row">
                    @foreach ($articles as $article)
                        <div class="col-lg-3 col-12">
                            <img src="{{ $article->images->path }}" alt="{{ $article->images->name }}" class="w-100" height="200">
                        </div>
                        <div class="col-lg-9 col-12">
                            <h2 class="border-bottom border-secondary">
                                <a href="/blog/article/{{ $article->id }}" class="blog-link">{{ $article->title }}</a>
                            </h2>
                            <div class="row py-2">
                                <div class="col-4">
                                    <i class="fas fa-th-list">
                                        <a href="/blog/category/{{ $article->categories->id }}" class="text-decor link-color">{{ $article->categories->name }}</a>
                                    </i>
                                </div>
                                <div class="col-8">
                                    <i class="fas fa-tags">
                                        @foreach ($article->tags as $tag)
                                            <a href="/blog/tag/{{ $tag->id }}" class="text-decor link-color">{{ $tag->name }}</a>
                                        @endforeach
                                    </i>
                                </div>
                            </div>
                            <h5 class="py-2">{{ $article->short_description }}</h5>
                            <p class="text-secondary font-italic">{{ $article->created_at }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection