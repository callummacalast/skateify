<?php

namespace Database\Seeders;

use App\Models\SkateSpot;
use App\Models\SkateSpotMedia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkateSpotMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            SkateSpotMedia::create([
                'skatespot_id' => SkateSpot::all()->random()->id,
                'type' => fake()->randomElement(['image', 'video']),
                'path' => 'path',
                'filename' => fake()->firstName(),
                'extension' => fake()->firstName()
            ]);
        }
    }
}
