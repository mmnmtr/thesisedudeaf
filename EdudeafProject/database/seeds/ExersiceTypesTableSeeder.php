<?php

use Illuminate\Database\Seeder;

class ExersiceTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      DB::table('exercisetypes')->insert([
        [
          'name' => 'แบบฝึกหัดที่ 1',
          'type' => 'เลือกคำศัพท์ให้ตรงกับภาพ',
        ],
        [
          'name' => 'แบบฝึกหัดที่ 2',
          'type' => 'เลือกคำศัพท์ให้ตรงกับสะกดนิ้วมือ',
        ],
      ]);

      DB::table('exercises')->insert([
        [
          'id' => '1',
          'exercise_name' => 'ร่างกายของฉัน',
          'type' => '1', //1,2 อัพโหลดกับตัวสะกดนิ้วมือ
        ],
        [
          'id' => '2',
          'exercise_name' => 'สัตว์เลี้ยง',
          'type' => '1', //1,2 อัพโหลดกับตัวสะกดนิ้วมือ
        ],
        [
          'id' => '3',
          'exercise_name' => 'ผลไม้',
          'type' => '1', //1,2 อัพโหลดกับตัวสะกดนิ้วมือ
        ],
        [
          'id' => '4',
          'exercise_name' => 'เครื่องแต่งกาย',
          'type' => '1', //1,2 อัพโหลดกับตัวสะกดนิ้วมือ
        ],
        [
          'id' => '5',
          'exercise_name' => 'รูปทรงเรขาคณิต',
          'type' => '1', //1,2 อัพโหลดกับตัวสะกดนิ้วมือ
        ],


        [
          'id' => '6',
          'exercise_name' => 'ร่างกาย',
          'type' => '2', //1,2 อัพโหลดกับตัวสะกดนิ้วมือ
        ],
        [
          'id' => '7',
          'exercise_name' => 'สี',
          'type' => '2', //1,2 อัพโหลดกับตัวสะกดนิ้วมือ
        ],
        [
          'id' => '8',
          'exercise_name' => 'กริยา',
          'type' => '2', //1,2 อัพโหลดกับตัวสะกดนิ้วมือ
        ],

      ]);

      DB::table('exercisechoices')->insert([
        [
          'id' => '1',
          'exercise_id' => '1', //ไอดีแบบฝึกหัด
          'exercise_number' => '1',
          'exercise_img' => 'heart.png',
          'choice_title1' => 'หัวใจ',
          'choice_title2' => 'หู',
          'choice_title3' => 'คิ้ว',
          'answer' => '1',
        ],

        [
          'id' => '2',
          'exercise_id' => '1', //ไอดีแบบฝึกหัด
          'exercise_number' => '2',
          'exercise_img' => 'ear.png',
          'choice_title1' => 'ขา',
          'choice_title2' => 'ผม',
          'choice_title3' => 'หู',
          'answer' => '3',
        ],

        [
          'id' => '3',
          'exercise_id' => '1', //ไอดีแบบฝึกหัด
          'exercise_number' => '3',
          'exercise_img' => 'tooth.png',
          'choice_title1' => 'ฟัน',
          'choice_title2' => 'แขน',
          'choice_title3' => 'เล็บ',
          'answer' => '1',
        ],


        [
          'id' => '4',
          'exercise_id' => '1', //ไอดีแบบฝึกหัด
          'exercise_number' => '4',
          'exercise_img' => 'nose.png',
          'choice_title1' => 'ศอก',
          'choice_title2' => 'จมูก',
          'choice_title3' => 'คอ',
          'answer' => '2',
        ],

        [
          'id' => '5',
          'exercise_id' => '1', //ไอดีแบบฝึกหัด
          'exercise_number' => '5',
          'exercise_img' => 'eye.png',
          'choice_title1' => 'ลิ้น',
          'choice_title2' => 'ไหล่',
          'choice_title3' => 'ตา',
          'answer' => '3',
        ],


        [
          'id' => '6',
          'exercise_id' => '2', //ไอดีแบบฝึกหัด
          'exercise_number' => '1',
          'exercise_img' => 'bird.png',
          'choice_title1' => 'นก',
          'choice_title2' => 'แมว',
          'choice_title3' => 'สุนัข',
          'answer' => '1',
        ],
        [
          'id' => '7',
          'exercise_id' => '2', //ไอดีแบบฝึกหัด
          'exercise_number' => '2',
          'exercise_img' => 'crab.png',
          'choice_title1' => 'กบ',
          'choice_title2' => 'ปู',
          'choice_title3' => 'ไก่',
          'answer' => '2',
        ],
        [
          'id' => '8',
          'exercise_id' => '2', //ไอดีแบบฝึกหัด
          'exercise_number' => '3',
          'exercise_img' => 'cat.png',
          'choice_title1' => 'ปลา',
          'choice_title2' => 'ต่อ',
          'choice_title3' => 'แมว',
          'answer' => '2',
        ],
        [
          'id' => '9',
          'exercise_id' => '2', //ไอดีแบบฝึกหัด
          'exercise_number' => '4',
          'exercise_img' => 'rat.png',
          'choice_title1' => 'หมู',
          'choice_title2' => 'หนู',
          'choice_title3' => 'ปู',
          'answer' => '2',
        ],
        [
          'id' => '10',
          'exercise_id' => '2', //ไอดีแบบฝึกหัด
          'exercise_number' => '5',
          'exercise_img' => 'pig.png',
          'choice_title1' => 'หมู',
          'choice_title2' => 'หมี',
          'choice_title3' => 'ปลา',
          'answer' => '1',
        ],

        [
          'id' => '11',
          'exercise_id' => '3', //ไอดีแบบฝึกหัด
          'exercise_number' => '1',
          'exercise_img' => 'apple.png',
          'choice_title1' => 'แอปเปิ้ล',
          'choice_title2' => 'มังคุด',
          'choice_title3' => 'ลิ้นจี่',
          'answer' => '1',
        ],

        [
          'id' => '12',
          'exercise_id' => '3', //ไอดีแบบฝึกหัด
          'exercise_number' => '2',
          'exercise_img' => 'orange.png',
          'choice_title1' => 'ทุเรียน',
          'choice_title2' => ' ขนุน',
          'choice_title3' => 'ส้ม',
          'answer' => '3',
        ],

        [
          'id' => '13',
          'exercise_id' => '3', //ไอดีแบบฝึกหัด
          'exercise_number' => '3',
          'exercise_img' => 'kiwi.png',
          'choice_title1' => 'กีวี่',
          'choice_title2' => 'ลองกอง',
          'choice_title3' => 'พุทรา',
          'answer' => '1',
        ],


        [
          'id' => '14',
          'exercise_id' => '3', //ไอดีแบบฝึกหัด
          'exercise_number' => '4',
          'exercise_img' => 'banana.png',
          'choice_title1' => 'กล้วย',
          'choice_title2' => 'ชมพู่',
          'choice_title3' => 'สาลี่',
          'answer' => '1',
        ],

        [
          'id' => '15',
          'exercise_id' => '3', //ไอดีแบบฝึกหัด
          'exercise_number' => '5',
          'exercise_img' => 'watermelon.png',
          'choice_title1' => 'องุ่น',
          'choice_title2' => 'มะละกอ',
          'choice_title3' => 'แตงโม',
          'answer' => '3',
        ],


        [
          'id' => '16',
          'exercise_id' => '4', //ไอดีแบบฝึกหัด
          'exercise_number' => '1',
          'exercise_img' => 'square.png',
          'choice_title1' => 'วงรี',
          'choice_title2' => 'สี่เหลี่ยม',
          'choice_title3' => 'หกเหลี่ยม่',
          'answer' => '2',
        ],

        [
          'id' => '17',
          'exercise_id' => '4', //ไอดีแบบฝึกหัด
          'exercise_number' => '2',
          'exercise_img' => 'triangle.png',
          'choice_title1' => 'คางหมู',
          'choice_title2' => 'วงกลม',
          'choice_title3' => 'สามเหลี่ยม',
          'answer' => '3',
        ],

        [
          'id' => '18',
          'exercise_id' => '4', //ไอดีแบบฝึกหัด
          'exercise_number' => '3',
          'exercise_img' => 'pentagon.png',
          'choice_title1' => 'หกเหลี่ยม',
          'choice_title2' => 'ห้าเหลี่ยม',
          'choice_title3' => 'สี่เหลี่ยม',
          'answer' => '2',
        ],


        [
          'id' => '19',
          'exercise_id' => '4', //ไอดีแบบฝึกหัด
          'exercise_number' => '4',
          'exercise_img' => 'circle.png',
          'choice_title1' => 'สามเหลี่ยม',
          'choice_title2' => 'วงรี',
          'choice_title3' => 'วงกลม',
          'answer' => '3',
        ],

        [
          'id' => '20',
          'exercise_id' => '4', //ไอดีแบบฝึกหัด
          'exercise_number' => '5',
          'exercise_img' => 'star.png',
          'choice_title1' => 'ดาว',
          'choice_title2' => 'วงกลม',
          'choice_title3' => 'สามเหลี่ยม',
          'answer' => '1',
        ],


        [
          'id' => '21',
          'exercise_id' => '6', //ไอดีแบบฝึกหัด
          'exercise_number' => '1',
          'exercise_img' => 'หู',
          'choice_title1' => 'ตา',
          'choice_title2' => 'หู',
          'choice_title3' => 'จมูก',
          'answer' => '2',
        ],


        [
          'id' => '22',
          'exercise_id' => '6', //ไอดีแบบฝึกหัด
          'exercise_number' => '2',
          'exercise_img' => 'คอ',
          'choice_title1' => 'คิ้ว',
          'choice_title2' => 'คอ',
          'choice_title3' => 'ลิ้น',
          'answer' => '2',
        ],

        [
          'id' => '23',
          'exercise_id' => '6', //ไอดีแบบฝึกหัด
          'exercise_number' => '3',
          'exercise_img' => 'ขา',
          'choice_title1' => 'ขา',
          'choice_title2' => 'แขน',
          'choice_title3' => 'ปาก',
          'answer' => '1',
        ],

        [
          'id' => '24',
          'exercise_id' => '6', //ไอดีแบบฝึกหัด
          'exercise_number' => '4',
          'exercise_img' => 'ศอก',
          'choice_title1' => 'คาง',
          'choice_title2' => 'นิ้ว',
          'choice_title3' => 'ศอก',
          'answer' => '3',
        ],

        [
          'id' => '25',
          'exercise_id' => '6', //ไอดีแบบฝึกหัด
          'exercise_number' => '5',
          'exercise_img' => 'ผม',
          'choice_title1' => 'ผม',
          'choice_title2' => 'ฟัน',
          'choice_title3' => 'ขา',
          'answer' => '1',
        ],



        [
          'id' => '26',
          'exercise_id' => '7', //ไอดีแบบฝึกหัด
          'exercise_number' => '1',
          'exercise_img' => 'แดง',
          'choice_title1' => 'ดำ',
          'choice_title2' => 'แดง',
          'choice_title3' => 'เขียว',
          'answer' => '2',
        ],


        [
          'id' => '27',
          'exercise_id' => '7', //ไอดีแบบฝึกหัด
          'exercise_number' => '2',
          'exercise_img' => 'เทา',
          'choice_title1' => 'ชมพู',
          'choice_title2' => 'เทา',
          'choice_title3' => 'ดำ',
          'answer' => '2',
        ],

        [
          'id' => '28',
          'exercise_id' => '7', //ไอดีแบบฝึกหัด
          'exercise_number' => '3',
          'exercise_img' => 'ขาว',
          'choice_title1' => 'ส้ม',
          'choice_title2' => 'ขาว',
          'choice_title3' => 'แสด',
          'answer' => '2',
        ],

        [
          'id' => '29',
          'exercise_id' => '7', //ไอดีแบบฝึกหัด
          'exercise_number' => '4',
          'exercise_img' => 'ส้ม',
          'choice_title1' => 'น้ำตาล',
          'choice_title2' => 'เทา',
          'choice_title3' => 'ส้ม',
          'answer' => '3',
        ],

        [
          'id' => '30',
          'exercise_id' => '7', //ไอดีแบบฝึกหัด
          'exercise_number' => '5',
          'exercise_img' => 'ฟ้า',
          'choice_title1' => 'เหลือง',
          'choice_title2' => 'น้ำเงิน',
          'choice_title3' => 'ฟ้า',
          'answer' => '3',
        ],


        [
          'id' => '31',
          'exercise_id' => '8', //ไอดีแบบฝึกหัด
          'exercise_number' => '1',
          'exercise_img' => 'เดิน',
          'choice_title1' => 'กิน',
          'choice_title2' => 'เดิน',
          'choice_title3' => 'นั่ง',
          'answer' => '2',
        ],


        [
          'id' => '32',
          'exercise_id' => '8', //ไอดีแบบฝึกหัด
          'exercise_number' => '2',
          'exercise_img' => 'ดู',
          'choice_title1' => 'นอน',
          'choice_title2' => 'หิว',
          'choice_title3' => 'ดู',
          'answer' => '3',
        ],

        [
          'id' => '33',
          'exercise_id' => '8', //ไอดีแบบฝึกหัด
          'exercise_number' => '3',
          'exercise_img' => 'นั่ง',
          'choice_title1' => 'นั่ง',
          'choice_title2' => 'ตี',
          'choice_title3' => 'มี',
          'answer' => '1',
        ],

        [
          'id' => '34',
          'exercise_id' => '8', //ไอดีแบบฝึกหัด
          'exercise_number' => '4',
          'exercise_img' => 'ดื่ม',
          'choice_title1' => 'ปลูก',
          'choice_title2' => 'ดื่ม',
          'choice_title3' => 'ขาย',
          'answer' => '2',
        ],

        [
          'id' => '35',
          'exercise_id' => '8', //ไอดีแบบฝึกหัด
          'exercise_number' => '5',
          'exercise_img' => 'ซื้อ',
          'choice_title1' => 'ซื้อ',
          'choice_title2' => 'เลี้ยง',
          'choice_title3' => 'ให้',
          'answer' => '1',
        ],





      ]);
    }
}
