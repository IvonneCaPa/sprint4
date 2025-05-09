<?php

namespace Database\Seeders;


use App\Models\Quote;
use App\Models\User;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(4)->create();

        Quote::factory(20)->create();

        $this->call([
            GallerySeeder::class,
        ]);
    }
}
