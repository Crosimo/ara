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
       
       $this->call([ProductSeeder::class, CarSeeder::class]);
       \App\Models\Car_Product::factory(2)->create();
    }
}
