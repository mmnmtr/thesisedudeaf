<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSentencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sentences', function (Blueprint $table) {
            $table->increments('id');

          $table->integer('subject_id')->unsigned();
          $table->foreign('subject_id')->references('id')->on('vocabularies')->onDelete('cascade');
          $table->string('verb');
          $table->integer('verb_id')->unsigned();
          $table->foreign('verb_id')->references('id')->on('vocabularies')->onDelete('cascade');
          $table->integer('object_id')->unsigned();
          $table->foreign('object_id')->references('id')->on('vocabularies')->onDelete('cascade');
            $table->integer('user_id');
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
        Schema::dropIfExists('sentences');
    }
}
