<?php

namespace Database\Seeders;
use App\Models\Subcata;
use Illuminate\Database\Seeder;

class SubcataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Subcata = Subcata::factory()->count(30)->create();
    }
}
