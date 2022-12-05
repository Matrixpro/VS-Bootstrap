<?php

namespace Database\Factories;

use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Location>
 */
class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'address' => fake()->streetAddress,
            'city' => fake()->randomElement([
                'Ramapo',
                'Southampton',
                'New Rochelle',
                'Clarkstown',
            ]),
            'zip' => fake()->randomNumber(5, true),
            'state_id' => State::where('code', 'NY')->first()->id,
            'country_id' => 1,
        ];
    }
}
