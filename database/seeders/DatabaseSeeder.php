<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        /**
         * Seed the application's database
         */

        $this->call(ProductsTableSeeder::class);
        $this->call(CostsTableSeeder::class);
    }
}
