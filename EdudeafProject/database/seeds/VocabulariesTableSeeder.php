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
            'vocab_photo' => 'icon_iam.png',
            'vocab_photoReal' => 'image_notfound.png',
            'vocab_video' => 'iam.mp4',
          ],
          [
            'category_id' => '1',
            'vocab_word' => 'แม่',
            'vocab_photo' => 'mother.png',
            'vocab_photoReal' => 'mother_real.png',
            'vocab_video' => 'mother.mp4',
          ],

          [
            'category_id' => '1',
            'vocab_word' => 'พ่อ',
            'vocab_photo' => 'father.png',
            'vocab_photoReal' => 'father_real.png',
            'vocab_video' => 'mother.mp4',
          ],
          [
            'category_id' => '1',
            'vocab_word' => 'น้อง',
            'vocab_photo' => 'sister.png',
            'vocab_photoReal' => 'sister_real.png',
            'vocab_video' => 'mother.mp4',
          ],
          [
            'category_id' => '1',
            'vocab_word' => 'น้า',
            'vocab_photo' => 'icon_mother.png',
            'vocab_photoReal' => 'aunt_real.png',
            'vocab_video' => 'mother.mp4',
          ],



          [
            'category_id' => '2',
            'vocab_word' => 'มี',
            'vocab_photo' => 'icon_notfound.png',
            'vocab_photoReal' => 'image_notfound.png',
            'vocab_video' => 'have.mp4',
          ],

          [
            'category_id' => '2',
            'vocab_word' => 'เห็น',
            'vocab_photo' => 'icon_notfound.png',
            'vocab_photoReal' => 'image_notfound.png',
            'vocab_video' => 'see.mp4',
          ],

          [
            'category_id' => '2',
            'vocab_word' => 'เลี้ยง',
            'vocab_photo' => 'icon_notfound.png',
            'vocab_photoReal' => 'image_notfound.png',
            'vocab_video' => 'support.mp4',
          ],

          [
            'category_id' => '3',
            'vocab_word' => 'เป็ด',
            'vocab_photo' => 'duck.png',
            'vocab_photoReal' => 'image_duck.png',
            'vocab_video' => 'duck.mp4',
          ],
          [
            'category_id' => '3',
            'vocab_word' => 'ไก่',
            'vocab_photo' => 'chicken.png',
            'vocab_photoReal' => 'chicken_real.png',
            'vocab_video' => 'chicken.mp4',
          ],
          [
            'category_id' => '3',
            'vocab_word' => 'นก',
            'vocab_photo' => 'bird.png',
            'vocab_photoReal' => 'bird_real.png',
            'vocab_video' => 'bird.mp4',
          ],
          [
            'category_id' => '3',
            'vocab_word' => 'แมว่',
            'vocab_photo' => 'cat.png',
            'vocab_photoReal' => 'cat_real.png',
            'vocab_video' => 'cat.mp4',
          ],
          [
            'category_id' => '3',
            'vocab_word' => 'หมู',
            'vocab_photo' => 'pig.png',
            'vocab_photoReal' => 'pig_real.png',
            'vocab_video' => 'pig.mp4',
          ],
          [
            'category_id' => '4',
            'vocab_word' => 'ข้าว',
            'vocab_photo' => 'rice.png',
            'vocab_photoReal' => 'rice_real.png',
            'vocab_video' => 'rice.mp4',
          ],

        ]);
    }
}
