<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'bus_number' => '11',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'bus_number' => '22',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'bus_number' => '33',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'bus_number' => '44',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'bus_number' => '55',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'bus_number' => '66',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'bus_number' => '77',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'bus_number' => '88',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 9,
                'bus_number' => '99',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 10,
                'bus_number' => '101',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];


        DB::table('buses')->insert($data);
    }
}
