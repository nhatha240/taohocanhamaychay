<?php

namespace Database\Factories;

use App\Models\comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_pro' => $this->faker->numberBetween(0, 20),
            'id_user' => $this->faker->numberBetween(0, 20),
            'contend' => $this->faker->numberBetween(0, 20),
        ];
    }
}
