<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\AboutUs;
use App\Models\AboutUsMember;
use App\Models\ContactUs;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            SliderSeeder::class,
            CategorySeeder::class,
            AboutUsSeeder::class,
            AboutUsAwardsSeeder::class,
            AboutUsMemberSeeder::class,
            ContactUsSeeder::class,
            ContactSocialSeeder::class,
            ProductSeeder::class,
        ]);
    }
}
