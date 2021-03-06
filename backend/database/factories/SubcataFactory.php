<?php

namespace Database\Factories;

use App\Models\Subcata;
// use App\Models\Categories;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubcataFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subcata::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'subcata_name' => $this->faker->word,
            'idcata' => $this->faker->numberBetween(1,20),
        ];
    }
}
