<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\BusStopRepository;

class BusStop extends Model
{
    use HasFactory;

    /**
     * The default distance in km to measure nearby buses
     *
     * @var int
     */
    const DEFAULT_DISTANCE_IN_KM = 2;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'address',
        'latitude',
        'longitude'
    ];
}
