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
                'name' => 'ด.ญ.อทิตยา พรวิวัฒน์สุข',
                'nickname' => 'ลูกจัน',
                'password' => bcrypt('0'),
            ],
            [
                'studentNumber' => '2',
                'name' => 'ด.ญ.ณัชณิชา ประเพระตา',
                'nickname' => 'แก้ม',
                'password' => bcrypt('0'),
            ],
            [
                'studentNumber' => '3',
                'name' => 'ด.ญ.ณัชณิชา ประเพระตา',
                'nickname' => 'จิว',
                'password' => bcrypt('0'),
            ],
            [
                'studentNumber' => '4',
                'name' => 'ด.ญ.ศิริประภา  จันทร์เพชร',
                'nickname' => 'ข้าวตัง',
                'password' => bcrypt('0'),
            ],
            [
                'name' => 'ด.ช.พีรณัฐ นันธิเสน',
                'studentNumber' => '5',
                'nickname' => 'อันปัน',
                'password' => bcrypt('0'),
            ],
            [
                'studentNumber' => '6',
                'name' => 'ด.ญ.เพ็ญรดี โหลยา',
                'nickname' => 'ปลายดาว',
                'password' => bcrypt('0'),
            ],
            [
                'studentNumber' => '7',
                'name' => 'ด.ญ.ปุญญิสา เหล่าซื่อสันต์วัฒน์',
                'nickname' => 'พลอย',
                'password' => bcrypt('0'),
            ],
            [
                'studentNumber' => '8',
                'name' => 'ด.ญ.อรจิรา วัยอาภา',
                'nickname' => 'แอม',
                'password' => bcrypt('0'),
            ],
            [
                'studentNumber' => '9',
                'name' => 'ด.ญ.รมณ จุมพรม',
                'nickname' => 'แหนม',
                'password' => bcrypt('0'),
            ],
            [
                'studentNumber' => '10',
                'name' => 'ด.ญ.ชนการต์ บุญศรี',
                'nickname' => 'น้ำทิพย์',
                'password' => bcrypt('0'),
            ],
        ]);

    }
}
