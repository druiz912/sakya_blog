<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // First you must create the categories so that there are no errors when creating the posts
        \App\Models\Category::factory(10)->create();
        \App\Models\User::factory(10)->create();
        \App\Models\Post::factory(10)->create();
        
    }
}
