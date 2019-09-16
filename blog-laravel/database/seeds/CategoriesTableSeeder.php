<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [ 
              'category_name' => '暮らし',
              'image' => '/storage/images/category/family.jpg'
            ],
            [
              
              'category_name' => 'キャンプ',
              'image' => '/storage/images/category/camp.jpg'
            ],
            [
              
              'category_name' => '釣り',
              'image' => '/storage/images/category/fishing.jpg'
            ],
            [
              
              'category_name' => '料理',
              'image' => '/storage/images/category/cooking.jpg'
            ],
            [
              
              'category_name' => 'お酒',
              'image' => '/storage/images/category/liquor.jpg'
            ],
            [
              
              'category_name' => 'ペット',
              'image' => '/storage/images/category/pet.jpg'
            ],
            [
              
              'category_name' => '旅行',
              'image' => '/storage/images/category/travel.jpg'
            ],
        ]);
    }
}
