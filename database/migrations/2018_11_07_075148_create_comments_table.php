<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id')->usigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
<<<<<<< HEAD
            $table->integer('commentable_id')->unsigned();
            $table->string('commentable_type');
=======
            //$table->integer('post_id')->unsigned();
            $table->integer('commentable_id')->unsigned();
            $table->string('commentable_type')->unsigned();
            //$table->string('type');
>>>>>>> dd0420af0195b97adba604308357b261d6f5d00c
            $table->string('comment');
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
        Schema::dropIfExists('comments');
    }
}
