<?php

namespace Tests\Feature;

use App\Http\Controllers\CommunityController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class CommunityFilterTest extends TestCase
{
    /**
     * Use can filter by location
     *
     * @return void
     */
    public function test_user_can_filter_by_location()
    {
        $response = $this->get('/filter_locations/filter_location-1');

        $response->assertStatus(200)->assertSee('Steuber Inlet');
    }
    /**
     * Use can sort by price high to low
     *
     * @return void
     */
    public function test_user_can_sort_by_price()
    {
        // Set sort options in cache same as user would via select menu
        $response = $this->get('/filter_locations/sort_price-ASC');
        $response->assertStatus(200);

        // Get the query based on cache vals
        $ctrl = new CommunityController;
        $query = $ctrl->getCommunityQuery();

        // Get paginated communities
        $communities = $query->paginate(9);

        // Loop through $communities to ensure each price_min is greater than the previous
        $previous_price_min = null;

        foreach ($communities as $community) {

            if (is_null($previous_price_min)) {
                $previous_price_min = $community->price_min;
                continue;
            }

            $this->assertGreaterThanOrEqual($previous_price_min, $community->price_min);
        }
    }

    public function test_user_can_not_use_bad_filter_data()
    {
        $bad_filter = 'sort_zip-ASC';
        $response = $this->get('/filter_locations/'.$bad_filter);

        $response
            ->assertStatus(422)
            ->assertJson([
                'message' => 'Invalid filter/sort options',
            ]);
    }
}
