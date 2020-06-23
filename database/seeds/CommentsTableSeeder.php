<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Comment;
use Faker\Generator as Faker;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $totalComments = 200;
        $existingPosts = Post::all();

        for ( $i = 0; $i < $totalComments; $i++ ) { 
            $newComment = new Comment();

            $newComment->post_id = $existingPosts->random()->id;
            $newComment->title = $faker->text(20);
            $newComment->body = $faker->paragraphs(5, true);

            $newComment->save();
        }
    }
}
