<?php

namespace Database\Seeders;

use App\Models\SkateSpot;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkateSpotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {

            SkateSpot::create([
                'user_id' => User::all()->random()->id,
                'title' => fake()->title(),
                'lat' => fake()->latitude(),
                'lng' => fake()->longitude(),
                'description' => fake()->paragraph(2),
                'features' => fake()->paragraph(3),
                'terrain' => fake()->randomElement(['Street', 'Park', 'Vert', 'DIY'])
            ]);
        }
    }
}
