<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('logs', function (Blueprint $table) {
        //     $table->increments('id');
            // $table->integer('user_id')->unsigned();
            // $table->foreign('user_id')->references('id')->on('users');
        //     $table->string('ip')->nullable();
        //     $table->string('location')->nullable();
        //     $table->string('type')->nullable();
        //     $table->string('description')->nullable();
        //     $table->integer('points')->default(100);
        //     $table->integer('week');
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
        Schema::dropIfExists('logs');
    }
}
