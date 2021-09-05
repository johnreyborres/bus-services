<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusCoordinateSeeder extends Seeder
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
                'bus_id' => 1,
                'latitude' => 1.41288313,
                'longitude' => 103.88363603,
                'speed' => 20.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'bus_id' => 2,
                'latitude' => 1.42388313,
                'longitude' => 103.88363603,
                'speed' => 20.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'bus_id' => 3,
                'latitude' => 1.43488313,
                'longitude' => 103.88363603,
                'speed' => 20.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'bus_id' => 4,
                'latitude' => 1.44588313,
                'longitude' => 103.88363603,
                'speed' => 20.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'bus_id' => 5,
                'latitude' => 1.45688313,
                'longitude' => 103.88363603,
                'speed' => 20.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'bus_id' => 6,
                'latitude' => 1.41288313,
                'longitude' => 103.88363603,
                'speed' => 20.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'bus_id' => 7,
                'latitude' => 1.4238313,
                'longitude' => 103.88463603,
                'speed' => 20.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'bus_id' => 8,
                'latitude' => 1.43488313,
                'longitude' => 103.88563603,
                'speed' => 20.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 9,
                'bus_id' => 9,
                'latitude' => 1.44588313,
                'longitude' => 103.88663603,
                'speed' => 20.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 10,
                'bus_id' => 10,
                'latitude' => 1.45688313,
                'longitude' => 103.88763603,
                'speed' => 20.00,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        DB::table('bus_coordinates')->insert($data);
    }
}
