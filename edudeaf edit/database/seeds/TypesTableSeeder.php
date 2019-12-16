<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('types')->insert([
            [
                'type_name' => 'คำนาม',
            ],
            [
                'type_name' => 'คำกริยา',
            ]
        ]);
    }
}
