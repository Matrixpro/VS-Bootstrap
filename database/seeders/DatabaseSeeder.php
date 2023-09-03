<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Community;
use App\Models\Location;
use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            SeedCountries::class,
            SeedStates::class,
        ]);

        Community::factory()
            ->count(15)
            ->has(Location::factory())
            ->create();
    }
}
