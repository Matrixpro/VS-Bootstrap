<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Community extends Model
{
    use HasFactory;

    public function location(): HasOne
    {
        return $this->hasOne(Location::class);
    }

     protected function priceMin(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => number_format($value),
        );
    }

}
