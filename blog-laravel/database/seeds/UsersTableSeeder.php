<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'=>'test',
                'email'=>'test@test.com',
                'password'=>bcrypt('test'),
                'image' => '/storage/images/default.png'
            ],
            [
                'name'=>'test2',
                'email'=>'test2@test.com',
                'password'=>bcrypt('test2'),
                'image' => '/storage/images/default.png'
            ],
            [
                'name'=>'test3',
                'email'=>'test3@test.com',
                'password'=>bcrypt('test3'),
                'image' => '/storage/images/default.png'
            ],
        ]);
    }
}
