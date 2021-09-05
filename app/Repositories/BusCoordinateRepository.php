<?php

namespace App\Repositories;

use App\Models\BusCoordinate;
use App\Models\BusStop;
use Illuminate\Support\Facades\DB;

class BusCoordinateRepository
{
    /**
     * Get all nearby buses based on current bus coordinates
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
             * SIN(RADIANS(%s)))))
        ', $latitude, $longitude, $latitude);

        $waitingTimeInMins = sprintf('%s/speed * 60 as arriving_in_mins', $distanceInKm);

        return BusCoordinate::select('buses.*', 'bus_coordinates.*', DB::raw($distanceInKm . ' as distance_in_km, ' . $waitingTimeInMins))
            ->join('buses', 'buses.id', '=', 'bus_coordinates.bus_id')
            ->having('distance_in_km', '<', BusStop::DEFAULT_DISTANCE_IN_KM)
            ->orderBy('distance_in_km')
            ->orderBy('bus_coordinates.created_at', 'desc');
    }
}
