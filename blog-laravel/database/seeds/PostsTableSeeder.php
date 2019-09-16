<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'user_id' => 1,
                'category_id' => 1,
                'title' => 'title',
                'content' => 'test content',
            ],
            [
                'user_id' => 2,
                'category_id' => 2,
                'title' => 'title2',
                'content' => 'test content2',
            ],
            [
                'user_id' => 3,
                'category_id' => 3,
                'title' => 'title3',
                'content' => 'test content3',
            ],
        ]);
    }
}
