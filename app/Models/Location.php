<?php

namespace App\Models;

use App\Models\Traits\HasCountry;
use App\Models\Traits\HasState;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Location extends Model
{
    use HasFactory;
    use HasCountry;
    use HasState;

    public function community(): BelongsTo
    {
        return $this->belongsTo(Community::class);
    }

    public function scopeWithCityCount($query): Builder
    {
        return $query->select('city')
            ->selectRaw('COUNT(*) as number_of_locations')
            ->groupBy('city');
    }
}
