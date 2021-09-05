<?php

namespace App\Http\Controllers;

use App\Http\Requests\BusStoreRequest;
use App\Http\Resources\BusResource;
use App\Models\Bus;
use App\Models\BusCoordinate;
use App\Models\BusStop;


class BusController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\BusStoreRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(BusStoreRequest $request)
    {
        // Create new bus
        $bus = Bus::create([
            'bus_number' => $request->bus_number
        ]);

        // Create bus location based on the selected bus stop
        $busStop = BusStop::find($request->bus_stop_id);
        $busCoordinate = BusCoordinate::create([
            'bus_id' => $bus->id,
            'latitude' => $busStop->latitude,
            'longitude' => $busStop->longitude,
            'speed' => BusCoordinate::DEFAULT_SPEED
        ]);
        
        return response()->json(['message' => 'Bus successfully added.', 'data' => new BusResource($bus)]);
    }
}
