<?php

namespace Database\Factories;

use App\Models\Products;
use App\Models\subcata;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Products::class;

    /**
     * Define the model's default state.
     *
     * @return array
     * #####randomElements($array = array (1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20), $count = 1),
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'price' => $this->faker->numberBetween(1000, 1000000),
            'des' => $this->faker->realText($this->faker->numberBetween(500,2000)),
            'id_subcata' => $this->faker->numberBetween(0,30),
            'brands' => $this->faker->numberBetween(0, 20),
            'id_color' => $this->faker->numberBetween(0, 20),
            'image' => $this->faker->numberBetween(0, 20),
            'rating' => $this->faker->numberBetween(0, 1000),
            'size' => $this->faker->numberBetween(0, 4),
            'stock' => $this->faker->numberBetween(0, 500),
        ];
    }
}
