<?php

namespace App\Models;

use App\Models\Stops;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BusNavigation extends Model
{
    protected $fillable = ['title', 'nameStart', 'nameEnd', 'dotsStart', 'dotsEnd'];

    public function stops(): HasMany
    {
        return $this->hasMany(Stops::class, 'bus_navigation_id');
    }
}
