<?php

use Illuminate\Database\Seeder;

class VocabulariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('vocabularies')->insert([
            [
                'category_id' => '1',
                'vocab_word' => 'ฉัน',
                'vocab_photo' => 'iicon.png',
                'vocab_photoReal' => 'i.png',
                'vocab_video' => 'i.mp4',
            ],
            [
                'category_id' => '1',
                'vocab_word' => 'แม่',
                'vocab_photo' => 'mothericon.png',
                'vocab_photoReal' => 'mother.png',
                'vocab_video' => 'mother.mp4',
            ],
            [
                'category_id' => '1',
                'vocab_word' => 'พ่อ',
                'vocab_photo' => 'fathericon.png',
                'vocab_photoReal' => 'father.png',
                'vocab_video' => 'father.mp4',
            ],

        ]);
    }
}
