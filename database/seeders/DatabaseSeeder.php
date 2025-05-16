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

        Destination::create([
            'name' => 'Puger',
            'description' => 'Puger adalah tempat wisata yang berada di Kecamatan Puger, Kabupaten Tangerang, Provinsi Bantul, Yogyakarta.',
            'location' => 'Puger, Kecamatan Puger, Kabupaten Tangerang, Provinsi Bantul, Yogyakarta',
            'fasility' => 'Puger adalah tempat wisata yang berada di Kecamatan Puger, Kabupaten Tangerang, Provinsi Bantul, Yogyakarta.',
            'latitude' => '-7.274444',
            'longitude' => '110.403611',
            'image' => 'puger.jpg',
            'price' => '90000',
            'content' => 'Puger adalah tempat wisata yang berada di Kecamatan Puger, Kabupaten Tangerang, Provinsi Bantul, Yogyakarta.',
            'category_id' => 2,
        ]);

    }
}

