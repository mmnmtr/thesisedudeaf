<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVocabulariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vocabularies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->string('vocab_word');
            $table->string('vocab_photo');
            $table->string('vocab_photoReal');
            $table->string('vocab_video');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migraçtions.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vocabularies');
    }
}
