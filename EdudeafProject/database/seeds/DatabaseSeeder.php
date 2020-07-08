<?php

use Illuminate\Database\Seeder;

class  DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//         $this->call(UsersTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(AdminTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(VocabulariesTableSeeder::class);
        $this->call(ExersiceTypesTableSeeder::class);


//      $this->call(ExerciseTableSeeder::class);
//      $this->call(ExerciesChoicesTableSeeder::class);


    }
}
