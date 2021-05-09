<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'message' => $this->faker->text(150),
            'created_at' => $this->faker->date(),
            'updated_at' => $this->faker->date(),
            'approved' => $this->faker->boolean(),
            'author_id' => rand(1, 20),
            'article_id' => rand(1, 20),
        ];
    }
}
