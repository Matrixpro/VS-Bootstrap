<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Smknstd\FakerPicsumImages\FakerPicsumImagesProvider;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Community>
 */
class CommunityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new FakerPicsumImagesProvider($faker));

        return [
            'name' => fake()->streetName,
            'featured_image_url' => $faker->imageUrl,
            'is_active' => fake()->boolean(75),
            'marketing_status' => fake()->randomElement(['Active', 'Coming Soon', 'Grand Opening', 'Sold Out']),
            'description' => fake()->text,
            'price_min' => $priceMin = fake()->numberBetween(100_000, 300_000),
            'price_max' => fake()->numberBetween($priceMin, 1_000_000),
            'sqft_min' => $areaMin = fake()->numberBetween(1000, 2000),
            'sqft_max' => fake()->numberBetween($areaMin, 3000),
        ];
    }
}
