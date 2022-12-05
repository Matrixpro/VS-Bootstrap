<?php

namespace App\Models\Traits;

use App\Models\State;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait HasState
{
    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }

    public function getStateCodeAttribute(): ?string
    {
        return optional($this->state)->code;
    }

    public function setStateCodeAttribute(string $code): void
    {
        if (! $state = State::where('code', $code)->first()) {
            return;
        }

        $this->state = $state;
    }
}
