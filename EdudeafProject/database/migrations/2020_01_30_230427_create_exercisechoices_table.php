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
            $table->foreign('exercise_id')->references('id')->on('exercises')->onDelete('cascade');
            $table->integer('exercise_id')->unsigned();
            $table->integer('exercise_number');
            $table->string('exercise_img');
            $table->string('choice_title');
            $table->integer('answer');
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
