<?php

namespace App\Models;

use App\Models\BusNavigation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stops extends Model
{
    protected $fillable = ['coordinate', 'name', 'arrivalTime', 'bus_navigation_id'];

    public function busNavigation(): BelongsTo
    {
        return $this->belongsTo(BusNavigation::class, 'bus_navigation_id');
    }
}
