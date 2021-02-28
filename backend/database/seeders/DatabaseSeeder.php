<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        ImagesSeeder::class,
        BrandsSeeder::class,
        CategoriesSeeder::class,
        ColorsSeeder::class,
        CustomerSeeder::class,
        ProductsSeeder::class,
        SizeSeeder::class,
        SubcataSeeder::class,
        ]);
    }
}
