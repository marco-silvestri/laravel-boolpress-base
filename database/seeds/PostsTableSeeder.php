<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Post;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    
    public function run(Faker $faker)
    {
        $totalPosts = 10;
        $existingUsers = User::all();

        for ( $i = 0; $i < $totalPosts; $i++ ) { 
            $newPost = new Post();

            $newPost->user_id = $existingUsers->random()->id;
            $newPost->title = $faker->text(100);
            $newPost->body = $faker->text(1000);

            $newPost->save();
        }
    }
}
