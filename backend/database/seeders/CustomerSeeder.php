<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Customer = customer::factory()->count(30)->create();
    }
}
