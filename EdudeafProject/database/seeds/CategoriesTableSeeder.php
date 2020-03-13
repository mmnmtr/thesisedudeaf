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
        //
        DB::table('categories')->insert([
            [
                'category_name' => 'ครอบครัว',
                'category_image' => 'family.png',
            ],
            [
                'category_name' => 'กิริยา',
                'category_image' => 'verb.png',
            ],
            [
                'category_name' => 'สัตว์',
                'category_image' => 'animal.png',
            ],
            [
                'category_name' => 'อาหาร',
                'category_image' => 'fruit.png',
            ],
        ]);
    }
}
