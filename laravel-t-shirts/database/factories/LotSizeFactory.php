<?php

namespace Database\Factories;

use App\Models\LotSize;
use Illuminate\Database\Eloquent\Factories\Factory;

class LotSizeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LotSize::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'total_stock' => rand(0, 15),
            'size_id' => rand(1, 10),
            'product_id' => rand(1, 20),
        ];
    }
}
