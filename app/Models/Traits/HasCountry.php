<?php

namespace App\Models\Traits;

use App\Models\Country;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait HasCountry
{
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function getCountryCodeAttribute(): ?string
    {
        return optional($this->country)->code;
    }

    public function setCountryCodeAttribute(string $code): void
    {
        if (! $country = Country::where('code', $code)->first()) {
            return;
        }

        $this->country = $country;
    }
}
