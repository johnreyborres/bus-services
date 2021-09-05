<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusStopSeeder extends Seeder
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
                'name' => 'Macpherson Green Condo',
                'address' => '70149 Macpherson Rd',
                'latitude' => 1.33309494,
                'longitude' => 103.88644198,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Citimac Ind Cplx',
                'address' => '70141 Macpherson Rd',
                'latitude' => 1.33352762,
                'longitude' => 103.88733867,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Bef Davidson Rd',
                'address' => '70131 Macpherson Rd',
                'latitude' => 1.333044020,
                'longitude' => 103.88508442,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'Opp Trinity',
                'address' => '70279 Paya Lebar Rd',
                'latitude' => 1.33180469,
                'longitude' => 103.88952972,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'name' => 'Le Crescendo',
                'address' => '70271 Paya Lebar Rd',
                'latitude' => 1.33098574,
                'longitude' => 103.88926580,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('bus_stops')->insert($data);
    }
}
