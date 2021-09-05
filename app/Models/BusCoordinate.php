<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bus;

class BusCoordinate extends Model
{
    use HasFactory;

    /**
     * The bus default speed based on current coordinate.
     *
     * @var float
     */
    const DEFAULT_SPEED = 20.00;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'bus_id',
        'latitude',
        'longitude',
        'speed'
    ];

    /**
     * Get the bus that owns the coordinate.
     */
    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }
}
