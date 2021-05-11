@extends('layouts')

@section('title')
    {{ $categories->name }}
@endsection

@section('content')
    <div class="container py-3 bg-white">
        <h1 class="py-2">List of Articles with Category: {{ $categories->name }}</h1>
        <div class="row">
            @foreach ($categories->articles as $article)
                <div class="col-12 py-2">
                    <div class="row">
                        <div class="col-lg-3 col-12">
                            <img src="{{ $article->images->path }}" alt="{{ $article->images->name }}" class="w-100" height="200">
                        </div>
                        <div class="col-lg-9 col-12">
                            <h2 class="border-bottom border-secondary">
                                <a href="/blog/article/{{ $article->id }}">{{ $article->title }}</a>
                            </h2>
                            <div class="row py-2">
                                <div class="col-4">
                                    <i class="fas fa-th-list">
                                        <a href="/blog/category/{{ $article->categories->id }}">{{ $article->categories->name }}</a>
                                    </i>
                                </div>
                                <div class="col-8">
                                    <i class="fas fa-tags">
                                        @foreach ($article->tags as $tag)
                                            <a href="/blog/tag/{{ $tag->id }}">{{ $tag->name }}</a>
                                        @endforeach
                                    </i>
                                </div>
                            </div>
                            <h5 class="py-2">{{ $article->short_description }}</h5>
                            <p class="text-secondary font-italic">{{ $article->created_at }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection