<?php

namespace Database\Factories;

use App\Models\customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_name' => $this->faker->name,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->Str::random(10),
            'fullname' => $this->faker->Str::random(20),
            'address' => $this->faker->address,
            'permission' => $this->faker->Str::random(1),
            'birthday' => $this->faker->date,
        ];
    }
}
