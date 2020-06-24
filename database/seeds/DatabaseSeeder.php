<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            DetailUsersTableSeeder::class,
            PostsTableSeeder::class,
            CommentsTableSeeder::class,
            TagTableSeeder::class,
            AssetsTableSeeder::class
            ]);
    }
}
