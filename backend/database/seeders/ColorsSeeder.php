<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Colors;

class ColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $color = Colors::factory()->count(30)->create();
    }
}
