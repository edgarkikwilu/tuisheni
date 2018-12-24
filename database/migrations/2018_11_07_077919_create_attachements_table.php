<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttachementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('attachements', function (Blueprint $table) {
        //     $table->increments('id')->unsigned();
        //     $table->integer('note_id')->unsigned();
        //     $table->foreign('note_id')->references('id')->on('notes')->onDelete('cascade');
        //     $table->string('filename');
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
        Schema::dropIfExists('attachements');
    }
}
