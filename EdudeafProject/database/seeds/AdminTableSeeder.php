<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('admins')->insert([
            [
                'name' => 'ปานจรี',
                'email' => 'teacher@gmail.com',
                'password' => bcrypt('teacher1234'),
            ],
        ]);
    }
}
