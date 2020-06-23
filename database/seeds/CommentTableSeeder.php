<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Comment;
use Faker\Generator as Faker;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $comment = 15;
        $posts = Post::all();

        for ($i = 0; $i < $comment; $i++) { 
            $newComment = new Comment();

            $newComment->post_id = $posts->random()->id;
            $newComment->body = $faker->text(250);

            $newComment->save();
        } 
    }
}
