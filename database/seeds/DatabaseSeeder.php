<?php

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
        $this->call([
            UserTableSeeder::class,
            InfoUserTable::class,
            PostTableSeeder::class,
            CommentTableSeeder::class,
            TagTableSeeder::class,
        ]);
    }
}
