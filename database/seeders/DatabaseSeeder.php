<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Destination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Category::create([
            'name' => 'Kuliner',
        ]);
        Category::create([
            'name' => 'Wisata',
        ]);


        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin123'),
        ]);

        $this->call([
            UserSeeder::class,
            DestinationSeeder::class,
        ]);

    }
}

