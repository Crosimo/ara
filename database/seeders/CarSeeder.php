<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert(
            [[
                "name"=>"Audi",
                "founded"=>1908,
                "description"=>"this is my Audi"
            ],
             [
                "name"=>"Mercedes",
                "founded"=> 1926,
                "description"=>"this is my mercedes"
            ],
            ]
         );
    }
}
