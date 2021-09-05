<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Repositories\BusCoordinateRepository;

class BusStopResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $busCoordinateRepository = new BusCoordinateRepository();
        $nearbyBuses = $busCoordinateRepository->getNearby($this->latitude, $this->longitude)->get();

        return [
            'id' => $this->id,
            'name' => $this->name,
            'address' => $this->address,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'distance_in_km' => (float) number_format($this->distance_in_km, 2),
            'nearby_buses' => BusStopNearbyBusResource::collection($nearbyBuses)
        ];
    }
}
