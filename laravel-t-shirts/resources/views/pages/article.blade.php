@extends('layouts')

@section('title')
    {{ $articles->name }}
@endsection

@section('content')
    <div class="container py-3 bg-white">
        <h1 class="border-bottom border-secondary py-2">{{ $articles->name }}</h1>
        <div class="row py-2">
            <div class="col-6 col-md-4">
                <i class="fas fa-th-list">
                    <a href="/blog/category/{{ $articles->categories->id }}" class="text-decor link-color"> {{ $articles->categories->name }}</a>
                </i>
            </div>
            <div class="col-6 col-md-8">
                <i class="fas fa-tags">
                    @foreach ($articles->tags as $tag)
                        <a href="/blog/tag/{{ $tag->id }}" class="text-decor link-color"> {{ $tag->name }}</a>   
                    @endforeach
                </i>
            </div>
        </div>
        <h3 class="py-2">{{ $articles->title }}</h3>
        <p class="pb-2">{{ $articles->short_description }}</p>
        <div class="row">
            <div class="col-12 col-md-5">
                @foreach ($articles->galleries->slice(0, 1) as $gallery)
                    <img src="{{ $gallery->path }}" alt="{{ $gallery->name }}" class="w-100 rounded mb-1" height="200">
                @endforeach
                @foreach ($articles->galleries->slice(1, 1) as $gallery)
                    <img src="{{ $gallery->path }}" alt="{{ $gallery->name }}" class="w-100 rounded my-4" height="272">
                @endforeach
            </div>
            <div class="col-12 col-md-7">
                @foreach ($articles->galleries->slice(2, 1) as $gallery)
                    <img src="{{ $gallery->path }}" alt="{{ $gallery->name }}" class="w-100 rounded" height="500">
                @endforeach
            </div>
        </div>
        <p>{!! $articles->content !!}</p>
        <div class="row pb-4">
            <div class="col-6">
                <i class="fas fa-user-edit text-secondary ">
                    <span class="font-italic"> {{ $articles->author->name }}</span>
                </i>
            </div>
            <div class="col-6 text-right">
                <i class="far fa-clock text-secondary">
                    <span class="font-italic"> {{ $articles->created_at }}</span>
                </i>
            </div>
        </div>
        <h2 class="py-2 border-top border-secondary pt-4">Comments({{ count($articles->comments) }})</h2>
        @foreach ($comments as $comment)
            @if ($articles->id === $comment->articles->id)
                <div class="row">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-2 col-md-1">
                                <i class="fas fa-user-alt h3"></i>
                            </div>
                            <div class="col-10 col-md-11">
                                <h5 class="py-2">{{ $comment->authors->name }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 text-right py-2">
                        <i class="far fa-clock">
                            <span class="font-italic"> {{ $comment->created_at }}</span>
                        </i>
                    </div>
                </div>
                <p class="border border-secondary text-secondary p-2">{{ $comment->message }}</p>
            @endif
        @endforeach
    </div>
@endsection