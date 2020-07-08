<?php

use Illuminate\Database\Seeder;

class ExerciseTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('exercises')->insert([
          [
            'exercise_name' => 'ร่างกายของฉัน',
            'type' => '1', //1,2 อัพโหลดกับตัวสะกดนิ้วมือ
          ],
          [
            'exercise_name' => 'สัตว์เลี้ยง',
            'type' => '1', //1,2 อัพโหลดกับตัวสะกดนิ้วมือ
          ],
          [

            'exercise_name' => 'ผลไม้',
            'type' => '1', //1,2 อัพโหลดกับตัวสะกดนิ้วมือ
          ],
          [
            'exercise_name' => 'เครื่องแต่งกาย',
            'type' => '1', //1,2 อัพโหลดกับตัวสะกดนิ้วมือ
          ],
          [
            'exercise_name' => 'รูปทรงเรขาคณิต',
            'type' => '1', //1,2 อัพโหลดกับตัวสะกดนิ้วมือ
          ],


          [
            'exercise_name' => 'ร่างกาย',
            'type' => '2', //1,2 อัพโหลดกับตัวสะกดนิ้วมือ
          ],
          [
            'exercise_name' => 'สี',
            'type' => '2', //1,2 อัพโหลดกับตัวสะกดนิ้วมือ
          ],
          [

            'exercise_name' => 'กริยา',
            'type' => '2', //1,2 อัพโหลดกับตัวสะกดนิ้วมือ
          ],

        ]);
    }
}
