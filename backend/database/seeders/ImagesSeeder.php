<?php

namespace Database\Seeders;

use App\Models\images;
use Illuminate\Database\Seeder;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Image = images::factory()->count(200)->create();
    }
}
