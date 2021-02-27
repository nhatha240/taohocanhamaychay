<?php

namespace Database\Factories;

use App\Models\images;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImagesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = images::class;
    protected $ = User::factory()
    ->has(Post::factory()->count(3))
    ->create();
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_products' => $this->faker->
        ];
    }
}
