<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(15),
            'short_description' => $this->faker->text(50),
            'currency' => $this->faker->text(5),
            'price' => $this->faker->randomFloat(3, 5, 25),
            'description' => $this->faker->text(),
            'rating' => rand(1, 5),
            'published_at' => $this->faker->date(),
            'code' => $this->faker->text(10),
            'features' => $this->faker->text(),
            'category_id' => rand(1, 3),
            'colour_id' => rand(1, 8),
            'image_id' => rand(1, 40),
        ];
    }
}
