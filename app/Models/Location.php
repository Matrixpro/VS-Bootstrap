<?php

namespace App\Models;

use App\Models\Traits\HasCountry;
use App\Models\Traits\HasState;
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
}
