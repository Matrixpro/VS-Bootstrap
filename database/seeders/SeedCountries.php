<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class SeedCountries extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::query()
            ->upsert([
                'name' => 'United States',
                'code' => 'US',
            ], 'code');
    }
}
