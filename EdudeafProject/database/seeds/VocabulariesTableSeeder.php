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

        //ครอบครัว
        [
          'category_id' => '1',
          'vocab_word' => 'พี่',
          'vocab_photo' => 'brother_iconimage.png',
          'vocab_photoReal' => 'brother_realimage.jpg',
          'vocab_video' => 'brother.mp4',
        ],
        [
          'category_id' => '1',
          'vocab_word' => 'พ่อ',
          'vocab_photo' => 'father_iconimage.png',
          'vocab_photoReal' => 'father_realimage.jpg',
          'vocab_video' => 'father.mp4',
        ],
        [
          'category_id' => '1',
          'vocab_word' => 'ปู่',
          'vocab_photo' => 'grandfather_iconimage.png',
          'vocab_photoReal' => 'grandfather_realimage.jpg',
          'vocab_video' => 'grandfather.mp4',
        ],
        [
          'category_id' => '1',
          'vocab_word' => 'ย่า',
          'vocab_photo' => 'grandmother_iconimage.png',
          'vocab_photoReal' => 'grandmother_realimage.jpg',
          'vocab_video' => 'grandmother.mp4',
        ],
        [
          'category_id' => '1',
          'vocab_word' => 'ฉัน',
          'vocab_photo' => 'i_iconimage.png',
          'vocab_photoReal' => 'i_realimage.jpg',
          'vocab_video' => 'i.mp4',
        ],
        [
          'category_id' => '1',
          'vocab_word' => 'แม่',
          'vocab_photo' => 'mother_iconimage.png',
          'vocab_photoReal' => 'mother_realimage.jpg',
          'vocab_video' => 'mother.mp4',
        ],
        [
          'category_id' => '1',
          'vocab_word' => 'น้อง',
          'vocab_photo' => 'sister_iconimage.png',
          'vocab_photoReal' => 'sister_realimage.jpg',
          'vocab_video' => 'sister.mp4',
        ],
        [
          'category_id' => '1',
          'vocab_word' => 'น้า',
          'vocab_photo' => 'uncle_iconimage.png',
          'vocab_photoReal' => 'uncle_realimage.jpg',
          'vocab_video' => 'uncle.mp4',
        ],
        [
          'category_id' => '1',
          'vocab_word' => 'เธอ',
          'vocab_photo' => 'you_iconimage.png',
          'vocab_photoReal' => 'you_realimage.jpg',
          'vocab_video' => 'you.mp4',
        ],
        [
          'category_id' => '1',
          'vocab_word' => 'อา',
          'vocab_photo' => 'arr_iconimage.png',
          'vocab_photoReal' => 'arr_realimage.jpg',
          'vocab_video' => 'arr.mp4',
        ],
        [
          'category_id' => '1',
          'vocab_word' => 'ป้า',
          'vocab_photo' => 'aunt_iconimage.png',
          'vocab_photoReal' => 'aunt_realimage.jpg',
          'vocab_video' => 'aunt.mp4',
        ],

//กริยา

        [
          'category_id' => '2',
          'vocab_word' => 'ซื้อ',
          'vocab_photo' => 'buy_iconimage.png',
          'vocab_photoReal' => 'buy_realimage.jpg',
          'vocab_video' => 'buy.mp4',
        ],
        [
          'category_id' => '2',
          'vocab_word' => 'ดิ่ม',
          'vocab_photo' => 'drink_iconimage.png',
          'vocab_photoReal' => 'drink_realimage.jpg',
          'vocab_video' => 'drink.mp4',
        ],
        [
          'category_id' => '2',
          'vocab_word' => 'กิน',
          'vocab_photo' => 'eat_iconimage.png',
          'vocab_photoReal' => 'eat_realimage.jpg',
          'vocab_video' => 'eat.mp4',
        ],
        [
          'category_id' => '2',
          'vocab_word' => 'ให้',
          'vocab_photo' => 'give_iconimage.png',
          'vocab_photoReal' => 'give_realimage.jpg',
          'vocab_video' => 'give.mp4',
        ],
        [
          'category_id' => '2',
          'vocab_word' => 'มี',
          'vocab_photo' => 'have_iconimage.png',
          'vocab_photoReal' => 'have_realimage.jpg',
          'vocab_video' => 'have.mp4',
        ],
        [
          'category_id' => '2',
          'vocab_word' => 'ดู',
          'vocab_photo' => 'see_iconimage.png',
          'vocab_photoReal' => 'see_realimage.jpg',
          'vocab_video' => 'see.mp4',
        ],
        [
          'category_id' => '2',
          'vocab_word' => 'ขาย',
          'vocab_photo' => 'sell_iconimage.png',
          'vocab_photoReal' => 'sell_realimage.jpg',
          'vocab_video' => 'sell.mp4',
        ],
        [
          'category_id' => '2',
          'vocab_word' => 'เลี้ยง',
          'vocab_photo' => 'support_iconimage.png',
          'vocab_photoReal' => 'support_realimage.jpg',
          'vocab_video' => 'support.mp4',
        ],
        [
          'category_id' => '2',
          'vocab_word' => 'pick',
          'vocab_photo' => 'pick_iconimage.png',
          'vocab_photoReal' => 'pick_realimage.jpg',
          'vocab_video' => 'pick.mp4',
        ],
        [
          'category_id' => '2',
          'vocab_word' => 'touch',
          'vocab_photo' => 'touch_iconimage.png',
          'vocab_photoReal' => 'touch_realimage.jpg',
          'vocab_video' => 'touch.mp4',
        ],


//สัตว์
        [
          'category_id' => '3',
          'vocab_word' => 'นก',
          'vocab_photo' => 'bird_iconimage.png',
          'vocab_photoReal' => 'bird_realimage.jpg',
          'vocab_video' => 'bird.mp4',
        ],
        [
          'category_id' => '3',
          'vocab_word' => 'แมว',
          'vocab_photo' => 'cat_iconimage.png',
          'vocab_photoReal' => 'cat_realimage.jpg',
          'vocab_video' => 'cat.mp4',
        ],
        [
          'category_id' => '3',
          'vocab_word' => 'ไก่',
          'vocab_photo' => 'chicken_iconimage.png',
          'vocab_photoReal' => 'chicken_realimage.jpg',
          'vocab_video' => 'chicken.mp4',
        ],
        [
          'category_id' => '3',
          'vocab_word' => 'ปู',
          'vocab_photo' => 'crab_iconimage.png',
          'vocab_photoReal' => 'crab_realimage.jpg',
          'vocab_video' => 'crab.mp4',
        ],
        [
          'category_id' => '3',
          'vocab_word' => 'หมา',
          'vocab_photo' => 'dog_iconimage.png',
          'vocab_photoReal' => 'dog_realimage.jpg',
          'vocab_video' => 'dog.mp4',
        ],
        [
          'category_id' => '3',
          'vocab_word' => 'เป็ด',
          'vocab_photo' => 'duck_iconimage.png',
          'vocab_photoReal' => 'duck_realimage.jpg',
          'vocab_video' => 'duck.mp4',
        ],
        [
          'category_id' => '3',
          'vocab_word' => 'ช้าง',
          'vocab_photo' => 'elephant_iconimage.png',
          'vocab_photoReal' => 'elephant_realimage.jpg',
          'vocab_video' => 'elephant.mp4',
        ],
        [
          'category_id' => '3',
          'vocab_word' => 'ปลา',
          'vocab_photo' => 'fish_iconimage.png',
          'vocab_photoReal' => 'fish_realimage.jpg',
          'vocab_video' => 'fish.mp4',
        ],
        [
          'category_id' => '3',
          'vocab_word' => 'หมู',
          'vocab_photo' => 'pig_iconimage.png',
          'vocab_photoReal' => 'pig_realimage.jpg',
          'vocab_video' => 'pig.mp4',
        ],
        [
          'category_id' => '3',
          'vocab_word' => 'หนู',
          'vocab_photo' => 'rat_iconimage.png',
          'vocab_photoReal' => 'rat_realimage.jpg',
          'vocab_video' => 'rat.mp4',
        ],

//อาหาร
        [
          'category_id' => '4',
          'vocab_word' => 'กล้วย',
          'vocab_photo' => 'banana_iconimage.png',
          'vocab_photoReal' => 'banana_realimage.jpg',
          'vocab_video' => 'banana.mp4',
        ],
        [
          'category_id' => '4',
          'vocab_word' => 'มะม่วง',
          'vocab_photo' => 'mango_iconimage.png',
          'vocab_photoReal' => 'mango_realimage.jpg',
          'vocab_video' => 'mango.mp4',
        ],
        [
          'category_id' => '4',
          'vocab_word' => 'นม',
          'vocab_photo' => 'milk_iconimage.png',
          'vocab_photoReal' => 'milk_realimage.jpg',
          'vocab_video' => 'milk.mp4',
        ],
        [
          'category_id' => '4',
          'vocab_word' => 'apple',
          'vocab_photo' => 'apple_iconimage.png',
          'vocab_photoReal' => 'apple_realimage.jpg',
          'vocab_video' => 'apple.mp4',
        ],
        [
          'category_id' => '4',
          'vocab_word' => 'egg',
          'vocab_photo' => 'egg_iconimage.png',
          'vocab_photoReal' => 'egg_realimage.jpg',
          'vocab_video' => 'egg.mp4',
        ],
        [
          'category_id' => '4',
          'vocab_word' => 'orange',
          'vocab_photo' => 'orange_iconimage.png',
          'vocab_photoReal' => 'orange_realimage.jpg',
          'vocab_video' => 'orange.mp4',
        ],
        [
          'category_id' => '4',
          'vocab_word' => 'rice',
          'vocab_photo' => 'rice_iconimage.png',
          'vocab_photoReal' => 'rice_realimage.jpg',
          'vocab_video' => 'rice.mp4',
        ],
        [
          'category_id' => '4',
          'vocab_word' => 'vegetable',
          'vocab_photo' => 'vegetable_iconimage.png',
          'vocab_photoReal' => 'vegetable_realimage.jpg',
          'vocab_video' => 'vegetable.mp4',
        ],
        [
          'category_id' => '4',
          'vocab_word' => 'water',
          'vocab_photo' => 'water_iconimage.png',
          'vocab_photoReal' => 'water_realimage.jpg',
          'vocab_video' => 'water.mp4',
        ],
        [
          'category_id' => '4',
          'vocab_word' => 'watermelon',
          'vocab_photo' => 'watermelon_iconimage.png',
          'vocab_photoReal' => 'watermelon_realimage.jpg',
          'vocab_video' => 'watermelon.mp4',
        ],
//ตัวเลข
        [
          'category_id' => '5',
          'vocab_word' => 'one',
          'vocab_photo' => 'one_iconimage.png',
          'vocab_photoReal' => 'one_realimage.png',
          'vocab_video' => 'one.mp4',
        ],
        [
          'category_id' => '5',
          'vocab_word' => 'two',
          'vocab_photo' => 'two_iconimage.png',
          'vocab_photoReal' => 'two_realimage.png',
          'vocab_video' => 'two.mp4',
        ],
        [
          'category_id' => '5',
          'vocab_word' => 'three',
          'vocab_photo' => 'three_iconimage.png',
          'vocab_photoReal' => 'three_realimage.png',
          'vocab_video' => 'three.mp4',
        ],
        [
          'category_id' => '5',
          'vocab_word' => 'four',
          'vocab_photo' => 'four_iconimage.png',
          'vocab_photoReal' => 'four_realimage.png',
          'vocab_video' => 'four.mp4',
        ],
        [
          'category_id' => '5',
          'vocab_word' => 'five',
          'vocab_photo' => 'five_iconimage.png',
          'vocab_photoReal' => 'five_realimage.png',
          'vocab_video' => 'five.mp4',
        ],
        [
          'category_id' => '5',
          'vocab_word' => 'six',
          'vocab_photo' => 'six_iconimage.png',
          'vocab_photoReal' => 'six_realimage.png',
          'vocab_video' => 'six.mp4',
        ],
        [
          'category_id' => '5',
          'vocab_word' => 'seven',
          'vocab_photo' => 'seven_iconimage.png',
          'vocab_photoReal' => 'seven_realimage.png',
          'vocab_video' => 'seven.mp4',
        ],
        [
          'category_id' => '5',
          'vocab_word' => 'eight',
          'vocab_photo' => 'eight_iconimage.png',
          'vocab_photoReal' => 'eight_realimage.png',
          'vocab_video' => 'eight.mp4',
        ],
        [
          'category_id' => '5',
          'vocab_word' => 'nine',
          'vocab_photo' => 'nine_iconimage.png',
          'vocab_photoReal' => 'nine_realimage.png',
          'vocab_video' => 'nine.mp4',
        ],
        [
          'category_id' => '5',
          'vocab_word' => 'ten',
          'vocab_photo' => 'ten_iconimage.png',
          'vocab_photoReal' => 'ten_realimage.png',
          'vocab_video' => 'ten.mp4',
        ],
//ผัก
        [
          'category_id' => '6',
          'vocab_word' => 'carrot',
          'vocab_photo' => 'carrot_iconimage.png',
          'vocab_photoReal' => 'carrot_realimage.jpg',
          'vocab_video' => 'carrot.mp4',
        ],
      ]);
    }
}
