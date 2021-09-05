<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BusStopNearbyBusResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'bus_id' => $this->bus_id,
            'bus_number' => $this->bus_number,
            'distance_in_km' => (float) number_format($this->distance_in_km, 2),
            'arriving_in_mins' => ceil($this->arriving_in_mins),
        ];
    }
}
