<?php

namespace Database\Seeders;

use App\Models\Skater;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkaterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            Skater::create([
                'user_id' => User::all()->random()->id,
                'stance' => fake()->randomElement(['Goofy', 'Regular']),
                'skill_level' => fake()->randomElement(['Beginner', 'Advanced', 'Professional']),
                'deck_size' => fake()->numberBetween(7, 9),
            ]);
        }
    }
}
