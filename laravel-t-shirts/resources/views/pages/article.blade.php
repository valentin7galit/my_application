@extends('layouts')

@section('title')
    {{ $articles->title }}
@endsection

@section('content')
    <div class="container py-3 bg-white">
        <h1 class="border-bottom border-secondary py-2">{{ $articles->title }}</h1>
        <div class="row py-2">
            <div class="col-4">
                <i class="fas fa-th-list">
                    <a href="/blog/category/{{ $articles->categories->id }}" class="text-decor link-color">{{ $articles->categories->name }}</a>
                </i>
            </div>
            <div class="col-8">
                <i class="fas fa-tags">
                    @foreach ($articles->tags  as $tag)
                        <a href="/blog/tag/{{ $tag->id }}" class="text-decor link-color">{{ $tag->name }}</a>   
                    @endforeach
                </i>
            </div>
        </div>
        <img src="{{ $articles->images->path }}" alt="{{ $articles->images->path }}" class="w-100" height="600">
        <p class="py-2">{{ $articles->content }}</p>
        <p class="text-secondary font-italic">{{ $articles->created_at }}</p>
    </div>
@endsection