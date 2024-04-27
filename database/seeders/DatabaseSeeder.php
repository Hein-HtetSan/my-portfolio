<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create();

        // User::factory()->create([
        //     'name' => 'Hein Htet San',
        //     'email' => 'heinhtetsan33455@gmail.com',
        // ]);
    }
}
