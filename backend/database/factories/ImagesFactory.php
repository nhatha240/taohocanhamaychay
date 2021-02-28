<?php

namespace Database\Factories;

use App\Models\images;

use Illuminate\Database\Eloquent\Factories\Factory;

class ImagesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = images::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'link' => $this->faker->word,
            'status'=> $this->faker->randomElement(array ('avata', 'products'), 1),
            'id_link'=> $this->faker->randomElement(array (1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20),  1)
        ];
    }
}
