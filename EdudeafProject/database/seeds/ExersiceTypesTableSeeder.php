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
    }
}
