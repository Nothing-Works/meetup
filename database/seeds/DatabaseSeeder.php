<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Plan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, 20)->create();
        factory(Plan::class, 4)->create();
        // $this->call(UsersTableSeeder::class);
    }
}
