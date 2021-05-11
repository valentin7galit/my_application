<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(20)->create();
        \App\Models\Image::factory(20)->create();
        \App\Models\Category::factory(20)->create();
        \App\Models\Tag::factory(20)->create();
        \App\Models\Article::factory(20)->create();
        \App\Models\ArticleTag::factory(20)->create();
        \App\Models\Gallery::factory(20)->create();
        \App\Models\Comment::factory(20)->create();

        \App\Models\ProductCategory::factory(3)->create();
        \App\Models\Colour::factory(8)->create();
        \App\Models\ProductImage::factory(48)->create();
        \App\Models\Product::factory(48)->create();
        \App\Models\Size::factory(5)->create();
        \App\Models\LotSize::factory(20)->create();
        \App\Models\ProductGallery::factory(48)->create();
    }
}
