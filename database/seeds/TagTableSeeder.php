<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'Html',
            'Sass',
            'Js',
            'Php',
            'Laravel',
        ];

        foreach ($tags as $tag) {
            $newTags = new Tag();
            $newTags->name = $tag;

            $newTags->save();
        }
    }
}
