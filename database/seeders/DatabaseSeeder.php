<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Kategori;
use App\Models\post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //   User::factory(10)->create();
            post::factory(10)->create();
            // Kategori::factory(2)->create();
    }
}
