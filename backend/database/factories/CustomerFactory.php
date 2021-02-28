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
            'user_name' => $this->faker->lastName,
            'password' => $this->faker->bankAccountNumber,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->e164PhoneNumber,
            'fullname' => $this->faker->name,
            'address' => $this->faker->address,
            'permission' => $this->faker->randomElement(array (1, 0), 1),
            'birthday' => $this->faker->date,
        ];
    }
}
