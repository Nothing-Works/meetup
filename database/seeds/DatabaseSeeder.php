<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        factory(\App\Post::class, 20)->create();
        // $this->call(UsersTableSeeder::class);
    }
}
