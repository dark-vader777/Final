<?php

namespace Database\Seeders;

use App\Models\category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         DB::table('categories')->insert([
             ['name' => 'ABOUT ME','route' => '/about', 'created_at' => now(), 'updated_at' => now()],
             ['name' => 'FEATURED WORKS','route' => '/featured', 'created_at' => now(), 'updated_at' => now()],
             ['name' => 'PROJECTS','route' => '/projects', 'created_at' => now(), 'updated_at' => now()],
             ['name' => 'BLOGS','route' => '/blogs', 'created_at' => now(), 'updated_at' => now()],
         ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
