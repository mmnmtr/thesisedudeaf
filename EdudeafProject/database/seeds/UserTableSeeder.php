<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'studentNumber' => '1',
                'titleName' => 'ด.ญ.',
                'name' => 'อทิตยา',
                'lastname' => 'พรวิวัฒน์สุข',
                'nickname' => 'ลูกจัน',
                'grade' => 'ชั้นปีการศึกษาปีที่ 1',
                'password' => bcrypt('0'),
            ],
            [
                'studentNumber' => '2',
                'titleName' => 'ด.ญ.',
                'name' => 'ณัชณิชา',
                'lastname' => 'ประเพระตา',
                'nickname' => 'แก้ม',
                'grade' => 'ชั้นปีการศึกษาปีที่ 1',
                'password' => bcrypt('0'),
            ],
            [
                'studentNumber' => '3',
                'titleName' => 'ด.ญ.',
                'name' => 'ณัชณิชา',
                'lastname' => 'ประเพระตา',
                'nickname' => 'จิว',
                'grade' => 'ชั้นปีการศึกษาปีที่ 1',
                'password' => bcrypt('0'),
            ],
            [
                'studentNumber' => '4',
                'titleName' => 'ด.ญ.',
                'name' => 'ศิริประภา',
                'lastname' => 'จันทร์เพชร',
                'nickname' => 'ข้าวตัง',
                'grade' => 'ชั้นปีการศึกษาปีที่ 1',
                'password' => bcrypt('0'),
            ],
            [
                'titleName' => 'ด.ช.',
                'name' => 'พีรณัฐ',
                'lastname' => 'นันธิเสน',
                'studentNumber' => '5',
                'nickname' => 'อันปัน',
                'grade' => 'ชั้นปีการศึกษาปีที่ 1',
                'password' => bcrypt('0'),
            ],
            [
                'studentNumber' => '6',
                'titleName' => 'ด.ญ.',
                'name' => 'เพ็ญรดี',
                'lastname' => 'โหลยา',
                'nickname' => 'ปลายดาว',
                'grade' => 'ชั้นปีการศึกษาปีที่ 1',
                'password' => bcrypt('0'),
            ],
            [
                'studentNumber' => '7',
                'titleName' => 'ด.ญ.',
                'name' => 'ปุญญิสา',
                'lastname' => 'เหล่าซื่อสันต์วัฒน์',
                'nickname' => 'พลอย',
                'grade' => 'ชั้นปีการศึกษาปีที่ 1',
                'password' => bcrypt('0'),
            ],
            [
                'studentNumber' => '8',
                'titleName' => 'ด.ญ.',
                'name' => 'อรจิรา',
                'lastname' => 'วัยอาภา',
                'nickname' => 'แอม',
                'grade' => 'ชั้นปีการศึกษาปีที่ 1',
                'password' => bcrypt('0'),
            ],
            [
                'studentNumber' => '9',
                'titleName' => 'ด.ญ.',
                'name' => 'รมณ',
                'lastname' => 'จุมพรม',
                'nickname' => 'แหนม',
                'grade' => 'ชั้นปีการศึกษาปีที่ 1',
                'password' => bcrypt('0'),
            ],
            [
                'studentNumber' => '10',
                'titleName' => 'ด.ญ.',
                'name' => 'ชนการต์',
                'lastname' => 'บุญศรี',
                'nickname' => 'น้ำทิพย์',
                'grade' => 'ชั้นปีการศึกษาปีที่ 1',
                'password' => bcrypt('0'),
            ],
        ]);

    }
}
