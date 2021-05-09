<?php

namespace Database\Factories;

use App\Models\ArticleTag;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleTagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ArticleTag::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'article_id' => rand(1, 20),
            'tag_id' => rand(1, 20),
        ];
    }
}
