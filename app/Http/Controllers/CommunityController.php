<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Cache;
use App\Models\Community;
use Illuminate\Http\Request;
use joshtronic\LoremIpsum;
use function PHPUnit\Framework\throwException;

class CommunityController extends Controller
{
    public function index()
    {
        $locations = Location::withCityCount()
            ->get()
            ->mapWithKeys(fn($location) => [
                $location->city => $location->city . ' (' . $location->number_of_locations . ')',
            ]);

        $communities = $this->getCommunityQuery()->paginate(9);
        $lipsum = new LoremIpsum();

        return view('home')->with(get_defined_vars());
    }

    /** Handle AJAX request to filter or sort communities */
    public function filterAndSort($params)
    {
        $this->updateFilterCache($params);

        $communitiesQuery = $this->getCommunityQuery();
        $communities = $communitiesQuery->paginate(9);

        return view('locations_grid')->with(compact(['communities']));
    }

    /** Build and return community query based on cached values */
    public function getCommunityQuery(): Builder
    {
        return Community::query()
            ->when(Cache::get('filter_location'),
                fn($query, $location_city) => $query->whereHas('location',
                    fn($q) => $q->where('city', $location_city)
                )
            )
            ->when(Cache::get('sort_price'),
                fn($query, $sort_price) => $query->orderBy('price_min', $sort_price)
            )
            ->when(Cache::get('sort_sqft'),
                fn($query, $sort_sqft) => $query->orderBy('sqft_min', $sort_sqft)
            );
    }

    /** Set filters in cache */
    private function updateFilterCache(string $params)
    {
        $filter_exp = explode('-', $params);

        if (count($filter_exp) !== 2) {
            throw new \Exception('Invalid data type!', 422);
        }

        [$filter_in, $filter_for] = $filter_exp;

        match ($filter_in) {
            'filter_location' => $filter_for != 'reset'
                ? Cache::put('filter_location', $filter_for)
                : Cache::forget('filter_location'),
            'sort_price' => [
                Cache::put('sort_price', $filter_for),
                Cache::forget('sort_sqft'),
            ],
            'sort_sqft' => [
                Cache::put('sort_sqft', $filter_for),
                Cache::forget('sort_price'),
            ],
            default => throw new \Exception('Invalid filter/sort options', 422)
        };
    }

}
