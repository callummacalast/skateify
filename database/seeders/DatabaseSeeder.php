<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\SkateSpot;
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

        $this->call(RoleSeeder::class);

        $this->call(AdminSeeder::class);
        $this->call(UserSkaterSeeder::class);
        $this->call(SkaterSeeder::class);
        $this->call(SkateSpotSeeder::class);
        $this->call(SkateSpotMediaSeeder::class);
        $this->call(ContactMessageSeeder::class);
        $this->call(MessageSeeder::class);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
