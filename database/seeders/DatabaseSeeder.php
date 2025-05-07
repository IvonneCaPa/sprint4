<?php

namespace Database\Seeders;

use App\Models\Gallery;
use App\Models\Quote;
use App\Models\User;
use App\Models\Photo;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(4)->create();

        Quote::factory(50)->create();
        Gallery::factory(6)->create();
        //Photo::factory(100)->create();
    }
}
