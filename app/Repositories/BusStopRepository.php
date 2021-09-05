<?php

namespace App\Repositories;

use App\Models\BusStop;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BusStopRepository
{
    /**
     * Get all nearby bus stops based on user's current location
     * 
     * @param float $latitude
     * @param float $longitude
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function getNearby($latitude, $longitude)
    {
        $distanceInKm = sprintf('
            11.1111 *
            DEGREES(ACOS(LEAST(1.0, COS(RADIANS(latitude))
             * COS(RADIANS(%s))
             * COS(RADIANS(longitude) - RADIANS(%s))
             + SIN(RADIANS(latitude))
             * SIN(RADIANS(%s))))) as distance_in_km
        ', $latitude, $longitude, $latitude);

        return BusStop::select('bus_stops.*', DB::raw($distanceInKm))
            ->having('distance_in_km', '<', BusStop::DEFAULT_DISTANCE_IN_KM)
            ->orderBy('distance_in_km');
    }
}

