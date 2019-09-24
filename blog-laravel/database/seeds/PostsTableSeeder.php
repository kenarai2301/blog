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
                'user_id' => 2,
                'category_id' => 3,
                'title' => 'title3',
                'content' => 'test content3',
            ],
            [
                'user_id' => 1,
                'category_id' => 4,
                'title' => 'hello',
                'content' => 'aaa',
            ],
            [
                'user_id' => 3,
                'category_id' => 5,
                'title' => 'こんにちは',
                'content' => '今日は晴れです',
            ],
            [
                'user_id' => 1,
                'category_id' => 6,
                'title' => 'sample',
                'content' => 'これはサンプルです',
            ],
            [
                'user_id' => 2,
                'category_id' => 7,
                'title' => 'good',
                'content' => 'これはテストです',
            ],
            [
                'user_id' => 3,
                'category_id' => 1,
                'title' => 'sample',
                'content' => 'これはテストです',
            ],
            [
                'user_id' => 1,
                'category_id' => 2,
                'title' => 'hello',
                'content' => 'これはテストです',
            ],
            [
                'user_id' => 2,
                'category_id' => 3,
                'title' => 'こんにちは',
                'content' => 'これはテストです',
            ],
            [
                'user_id' => 3,
                'category_id' => 4,
                'title' => '2019',
                'content' => 'これはテストです',
            ],
            [
                'user_id' => 1,
                'category_id' => 5,
                'title' => '777',
                'content' => 'これはテストです',
            ],

        ]);
    }
}
