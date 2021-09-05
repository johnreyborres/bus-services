<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\BusStopIndexRequest;
use App\Http\Resources\BusStopResource;
use App\Repositories\BusStopRepository;

class BusStopController extends Controller
{
    /**
     * The bus stop repository instance.
     *
     * @var App\Repositories\BusStopRepository
     */
    protected $busStopRepository;

    /**
     * Create a new controller instance.
     *
     * @param  App\Repositories\BusStopRepository $busStopRepository
     * @return void
     */
    public function __construct(BusStopRepository $busStopRepository)
    {
        $this->busStopRepository = $busStopRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \App\Http\Requests\BusStopIndexRequest  $request
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(BusStopIndexRequest $request)
    {
        $query = $this->busStopRepository->getNearby($request->latitude, $request->longitude);
        $busStops = isset($request->per_page) ? $query->paginate($request->per_page) : $query->paginate();

        return BusStopResource::collection($busStops);
    }
}
