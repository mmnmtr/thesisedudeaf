<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExercisechoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercisechoices', function (Blueprint $table) {
            $table->increments('id');

          $table->string('exercise_id');
            $table->string('exercise_number')->nullable();
            $table->string('exercise_img')->nullable();
            $table->string('choice_title1')->nullable();
          $table->string('choice_title2')->nullable();
          $table->string('choice_title3')->nullable();
            $table->string('answer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercisechoices');
    }
}
