<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('choices', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->integer('quiz_question_id')->unsigned();
        //     $table->foreign('quiz_question_id')->references('id')->on('quiz_questions')->onDelete('cascade);
        //     $table->string('index');
        //     $table->string('name');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('choices');
    }
}
