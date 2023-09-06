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
        // $this->call(CountrySeeder::class);
        // $this->call(UserSeeder::class);
        // $this->call(GroupSeeder::class);
        // $this->call(GroupUserSeeder::class);

        // $this->call(PostSeeder::class);
        // $this->call(ProfileSeeder::class);
        // $this->call(CommentSeeder::class);
        // $this->call(MovieSeeder::class);
        // $this->call(PhotoSeeder::class);
        // $this->call(TagSeeder::class);
        $this->call(TaggableSeeder::class);
    }
}
