<?php

use Illuminate\Database\Seeder;

class ExerciesChoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('exercisechoices')->insert([
          [
            'exercise_id' => '1', //ไอดีแบบฝึกหัด
            'exercise_number' => '1',
            'exercise_img' => 'heart.png',
            'choice_title1' => 'หัวใจ',
            'choice_title2' => 'หู',
            'choice_title3' => 'คิ้ว',
            'answer' => '1',
          ],

          [
            'exercise_id' => '1', //ไอดีแบบฝึกหัด
            'exercise_number' => '2',
            'exercise_img' => 'ear.png',
            'choice_title1' => 'ขา',
            'choice_title2' => 'ผม',
            'choice_title3' => 'หู',
            'answer' => '3',
          ],

          [
            'exercise_id' => '1', //ไอดีแบบฝึกหัด
            'exercise_number' => '3',
            'exercise_img' => 'tooth.png',
            'choice_title1' => 'ฟัน',
            'choice_title2' => 'แขน',
            'choice_title3' => 'เล็บ',
            'answer' => '1',
          ],


          [
            'exercise_id' => '1', //ไอดีแบบฝึกหัด
            'exercise_number' => '4',
            'exercise_img' => 'nose.png',
            'choice_title1' => 'ศอก',
            'choice_title2' => 'จมูก',
            'choice_title3' => 'คอ',
            'answer' => '2',
          ],

          [
            'exercise_id' => '1', //ไอดีแบบฝึกหัด
            'exercise_number' => '5',
            'exercise_img' => 'eye.png',
            'choice_title1' => 'ลิ้น',
            'choice_title2' => 'ไหล่',
            'choice_title3' => 'ตา',
            'answer' => '3',
          ],


          [
            'exercise_id' => '2', //ไอดีแบบฝึกหัด
            'exercise_number' => '1',
            'exercise_img' => 'bird.png',
            'choice_title1' => 'นก',
            'choice_title2' => 'แมว',
            'choice_title3' => 'สุนัข',
            'answer' => '1',
          ],
          [
            'exercise_id' => '2', //ไอดีแบบฝึกหัด
            'exercise_number' => '2',
            'exercise_img' => 'crab.png',
            'choice_title1' => 'กบ',
            'choice_title2' => 'ปู',
            'choice_title3' => 'ไก่',
            'answer' => '2',
          ],
           [
            'exercise_id' => '2', //ไอดีแบบฝึกหัด
            'exercise_number' => '3',
            'exercise_img' => 'cat.png',
            'choice_title1' => 'ปลา',
            'choice_title2' => 'ต่อ',
            'choice_title3' => 'แมว',
            'answer' => '2',
          ],
          [
            'exercise_id' => '2', //ไอดีแบบฝึกหัด
            'exercise_number' => '4',
            'exercise_img' => 'rat.png',
            'choice_title1' => 'หมู',
            'choice_title2' => 'หนู',
            'choice_title3' => 'ปู',
            'answer' => '2',
          ],
            [
            'exercise_id' => '2', //ไอดีแบบฝึกหัด
            'exercise_number' => '5',
            'exercise_img' => 'pig.png',
            'choice_title1' => 'หมู',
            'choice_title2' => 'หมี',
            'choice_title3' => 'ปลา',
            'answer' => '1',
          ],

          [
            'exercise_id' => '3', //ไอดีแบบฝึกหัด
            'exercise_number' => '1',
            'exercise_img' => 'apple.png',
            'choice_title1' => 'แอปเปิ้ล',
            'choice_title2' => 'มังคุด',
            'choice_title3' => 'ลิ้นจี่',
            'answer' => '1',
          ],

          [
            'exercise_id' => '3', //ไอดีแบบฝึกหัด
            'exercise_number' => '2',
            'exercise_img' => 'orange.png',
            'choice_title1' => 'ทุเรียน',
            'choice_title2' => ' ขนุน',
            'choice_title3' => 'ส้ม',
            'answer' => '3',
          ],

          [
            'exercise_id' => '3', //ไอดีแบบฝึกหัด
            'exercise_number' => '3',
            'exercise_img' => 'kiwi.png',
            'choice_title1' => 'กีวี่',
            'choice_title2' => 'ลองกอง',
            'choice_title3' => 'พุทรา',
            'answer' => '1',
          ],


          [
            'exercise_id' => '3', //ไอดีแบบฝึกหัด
            'exercise_number' => '4',
            'exercise_img' => 'banana.png',
            'choice_title1' => 'กล้วย',
            'choice_title2' => 'ชมพู่',
            'choice_title3' => 'สาลี่',
            'answer' => '1',
          ],

          [
            'exercise_id' => '3', //ไอดีแบบฝึกหัด
            'exercise_number' => '5',
            'exercise_img' => 'watermelon.png',
            'choice_title1' => 'องุ่น',
            'choice_title2' => 'มะละกอ',
            'choice_title3' => 'แตงโม',
            'answer' => '3',
          ],


          [
            'exercise_id' => '4', //ไอดีแบบฝึกหัด
            'exercise_number' => '1',
            'exercise_img' => 'square.png',
            'choice_title1' => 'วงรี',
            'choice_title2' => 'สี่เหลี่ยม',
            'choice_title3' => 'หกเหลี่ยม่',
            'answer' => '2',
          ],

          [
            'exercise_id' => '4', //ไอดีแบบฝึกหัด
            'exercise_number' => '2',
            'exercise_img' => 'triangle.png',
            'choice_title1' => 'คางหมู',
            'choice_title2' => 'วงกลม',
            'choice_title3' => 'สามเหลี่ยม',
            'answer' => '3',
          ],

          [
            'exercise_id' => '4', //ไอดีแบบฝึกหัด
            'exercise_number' => '3',
            'exercise_img' => 'pentagon.png',
            'choice_title1' => 'หกเหลี่ยม',
            'choice_title2' => 'ห้าเหลี่ยม',
            'choice_title3' => 'สี่เหลี่ยม',
            'answer' => '2',
          ],


          [
            'exercise_id' => '4', //ไอดีแบบฝึกหัด
            'exercise_number' => '4',
            'exercise_img' => 'circle.png',
            'choice_title1' => 'สามเหลี่ยม',
            'choice_title2' => 'วงรี',
            'choice_title3' => 'วงกลม',
            'answer' => '3',
          ],

          [
            'exercise_id' => '4', //ไอดีแบบฝึกหัด
            'exercise_number' => '5',
            'exercise_img' => 'star.png',
            'choice_title1' => 'ดาว',
            'choice_title2' => 'วงกลม',
            'choice_title3' => 'สามเหลี่ยม',
            'answer' => '1',
          ],


            [
            'exercise_id' => '6', //ไอดีแบบฝึกหัด
            'exercise_number' => '1',
            'exercise_img' => '2',
            'choice_title1' => 'ตา',
            'choice_title2' => 'หู',
            'choice_title3' => 'จมูก',
            'answer' => '2',
          ],


          [
            'exercise_id' => '6', //ไอดีแบบฝึกหัด
            'exercise_number' => '2',
            'exercise_img' => '2',
            'choice_title1' => 'คิ้ว',
            'choice_title2' => 'คอ',
            'choice_title3' => 'ลิ้น',
            'answer' => '2',
          ],

          [
            'exercise_id' => '6', //ไอดีแบบฝึกหัด
            'exercise_number' => '3',
            'exercise_img' => '1',
            'choice_title1' => 'ขา',
            'choice_title2' => 'แขน',
            'choice_title3' => 'ปาก',
            'answer' => '1',
          ],

            [
            'exercise_id' => '6', //ไอดีแบบฝึกหัด
            'exercise_number' => '4',
            'exercise_img' => '3',
            'choice_title1' => 'คาง',
            'choice_title2' => 'นิ้ว',
            'choice_title3' => 'ศอก',
            'answer' => '3',
          ],

          [
            'exercise_id' => '6', //ไอดีแบบฝึกหัด
            'exercise_number' => '5',
            'exercise_img' => '1',
            'choice_title1' => 'ผม',
            'choice_title2' => 'ฟัน',
            'choice_title3' => 'ขา',
            'answer' => '1',
          ],



            [
            'exercise_id' => '7', //ไอดีแบบฝึกหัด
            'exercise_number' => '1',
            'exercise_img' => '2',
            'choice_title1' => 'ดำ',
            'choice_title2' => 'แดง',
            'choice_title3' => 'เขียว',
            'answer' => '2',
          ],


          [
            'exercise_id' => '7', //ไอดีแบบฝึกหัด
            'exercise_number' => '2',
            'exercise_img' => '2',
            'choice_title1' => 'ชมพู',
            'choice_title2' => 'เทา',
            'choice_title3' => 'ดำ',
            'answer' => '2',
          ],

          [
            'exercise_id' => '7', //ไอดีแบบฝึกหัด
            'exercise_number' => '3',
            'exercise_img' => '2',
            'choice_title1' => 'ส้ม',
            'choice_title2' => 'ขาว',
            'choice_title3' => 'แสด',
            'answer' => '2',
          ],

            [
            'exercise_id' => '7', //ไอดีแบบฝึกหัด
            'exercise_number' => '4',
            'exercise_img' => '3',
            'choice_title1' => 'น้ำตาล',
            'choice_title2' => 'เทา',
            'choice_title3' => 'ส้ม',
            'answer' => '3',
          ],

          [
            'exercise_id' => '7', //ไอดีแบบฝึกหัด
            'exercise_number' => '5',
            'exercise_img' => '3',
            'choice_title1' => 'เหลือง',
            'choice_title2' => 'น้ำเงิน',
            'choice_title3' => 'ฟ้า',
            'answer' => '3',
          ],


           [
            'exercise_id' => '8', //ไอดีแบบฝึกหัด
            'exercise_number' => '1',
            'exercise_img' => '2',
            'choice_title1' => 'กิน',
            'choice_title2' => 'เดิน',
            'choice_title3' => 'นั่ง',
            'answer' => '2',
          ],


          [
            'exercise_id' => '8', //ไอดีแบบฝึกหัด
            'exercise_number' => '2',
            'exercise_img' => '3',
            'choice_title1' => 'นอน',
            'choice_title2' => 'หิว',
            'choice_title3' => 'ดู',
            'answer' => '3',
          ],

          [
            'exercise_id' => '8', //ไอดีแบบฝึกหัด
            'exercise_number' => '3',
            'exercise_img' => '1',
            'choice_title1' => 'นั่ง',
            'choice_title2' => 'ตี',
            'choice_title3' => 'มี',
            'answer' => '1',
          ],

            [
            'exercise_id' => '8', //ไอดีแบบฝึกหัด
            'exercise_number' => '4',
            'exercise_img' => '2',
            'choice_title1' => 'ปลูก',
            'choice_title2' => 'ดื่ม',
            'choice_title3' => 'ขาย',
            'answer' => '2',
          ],

          [
            'exercise_id' => '8', //ไอดีแบบฝึกหัด
            'exercise_number' => '5',
            'exercise_img' => '1',
            'choice_title1' => 'ซื้อ',
            'choice_title2' => 'เลี้ยง',
            'choice_title\3' => 'ให้',
            'answer' => '1',
          ],





        ]);
    }
}
