<?php

namespace Database\Seeders;

use App\Models\Message;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Message::create([
            'sender_id' => User::find(2)->id,
            'receiver_id' => User::find(3)->id,
            'content' => fake()->paragraph(3)
        ]);
    }
}
