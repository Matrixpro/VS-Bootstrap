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
            ->create()
        ->each(function (Community $community) {
            Location::factory()
                ->state(new Sequence(fn ($sequence) => ['community_id' => $community->getKey()]))
                ->create();
        });

//        Location::factory()
//            ->state(new Sequence(fn ($sequence) => ['state_id' => State::query()->whereIn('code', ['TX', 'NM', 'CO', 'IL'])->get()->random()->id]))
//            ->count(15)
//            ->create();
    }
}
